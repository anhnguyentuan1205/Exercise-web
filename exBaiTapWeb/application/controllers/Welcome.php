<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->model('User_model');
        $this->load->model('Product_model');
        $this->load->model('Bill_model');
    }

    public function test()
    {
        $data=array(
            'mess'=>'hahahah',
            'send'=>'TRUE'
        );
        $this->load->view('welcome_message',$data);
    }

    public function index()
    {
        $result = $this->Product_model->getLimitProducts(4, 0);
        $result2 = $this->Product_model->getLimitProducts(4, 4);
        $data = array(
            'result' => $result,
            'result2' => $result2
        );
        $this->load->view('index1', $data);
    }

    public function login()
    {
        if (!empty($_POST))
        {
            $mail = isset($_POST['Email']) ? $_POST['Email'] : '';
            $pass = isset($_POST['Pass']) ? $_POST['Pass'] : '';
            if (empty($mail) || empty($pass))
            {
                $data = array(
                    'message' => 'nhập thiếu thông tin'
                );
                $this->load->view('dangnhap1', $data);
            } else
            {
                $result = $this->User_model->getUser($mail, $pass);
                if (empty($result))
                {

                    $data = array(
                        'message' => 'Sai tài khoản hoặc mật khẩu'
                    );
                    $this->load->view('dangnhap1', $data);
                } else
                {
                    $_SESSION['user'] = $result;
                    $this->index();
                }
            }
        } else
        {
            $this->load->view('dangnhap1');
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        $this->index();
    }

    public function manageProducts($mess = '')
    {
        $result = $this->Product_model->getProducts();
        $data = array(
            'products' => $result
        );
        if (!empty($mess))
        {
            $data['mess'] = $mess;
        }
        $this->load->view('products', $data);
    }

    public function deleteProduct()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->Product_model->deleteProduct($id);
        }
        $this->manageProducts();
    }

    public function addProduct()
    {
        if (!empty($_POST))
        {
            if (isset($_POST))
            {
                if (isset($_FILES['hinh']))
                {
                    if ($_FILES['hinh']['error'] != 0)
                    {
                        $this->manageProducts('file hình bị lỗi');
                    } else
                    {
                        $ma = $_POST['Ma'];
                        $ten = $_POST['Ten'];
                        $mota = $_POST['Mota'];
                        $hinh = "upload/" . $_FILES['hinh']['name'];
                        $gia = $_POST['Gia'];
                        $loai = $_POST['Loai'];
                        $sx = $_POST['Masx'];
                        move_uploaded_file($_FILES['hinh']['tmp_name'], 'upload/' . $_FILES['hinh']['name']);
                        $product = array(
                            'mahang' => $ma,
                            'tenhang' => $ten,
                            'mota' => $mota,
                            'hinh' => $hinh,
                            'gia' => $gia,
                            'maloai' => $loai,
                            'manxb' => $sx
                        );
                        $this->Product_model->insertProduct($product);
                        $this->manageProducts();
                    }
                }
            }
        } else
        {
            $this->load->view('them');
        }
    }

    public function productDetail($product = '')
    {
        if (empty($product))
        {
            if (!empty($_GET))
            {
                $id = $_GET['id'];
                $product = $this->Product_model->searchProduct($id);
                $data = array(
                    'product' => $product[0]
                );
                $this->load->view('productdetail', $data);
            } else
            {
                $this->load->view('productdetail', array
                (
                    'mess' => 'không sản phẩm được chọn',
                    'product' => '0'
                ));
            }
        } else
        {
            $this->load->view('productdetail', $product);
        }
    }

    public function addCart()
    {
        $id = $_GET['id'];
        $product = $this->Product_model->searchProduct($id);
        $product[0]['soluong'] = 1;
        if (isset($_SESSION['cart']))
        {
            foreach ($_SESSION['cart'] as $pos => $item)
            {
                if ($item[0]['mahang'] == $product[0]['mahang'])
                {
                    $_SESSION['cart'][$pos][0]['soluong'] += 1;
                    $this->index();
                    return;
                }
            }
            $_SESSION['cart'][] = $product;
            $this->index();
            return;
        }
        $_SESSION['cart'][] = $product;

        $this->index();
    }

    public function viewCart()
    {
        if (isset($_SESSION['cart']))
        {
            $data = array(
                'products' => $_SESSION['cart']
            );
            $this->load->view('viewcart', $data);
        }
        else
            $this->load->view('viewcart');
    }

    public function info()
    {
        if (!isset($_SESSION['user']))
        {
            $this->login();
        } else
        {
            $this->load->view('info');
        }
    }

    public function confirm()
    {
        $email = $_SESSION['user'][0]['email'];
        $name = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $dt = $_POST['dienthoai'];
        $code = strtotime(date('Y-m-d H:i:s'));
        $bill = array(
            'mahd' => $code,
            'email' => $email,
            'tenngnhan' => $name,
            'diachi' => $diachi,
            'dienthoai' => $dt
        );
        $this->Bill_model->insertBill($bill);
        $cart = $_SESSION['cart'];
        $count = 0;
        foreach ($cart as $product)
        {
            $detail = array(
                'mahd' => $code,
                'mahang' => $product[0]['mahang'],
                'gia' => $product[0]['gia'],
                'soluong' => $product[0]['soluong']
            );
            $count += $product[0]['gia'] * $product[0]['soluong'];
            $this->Bill_model->insertBillDetail($detail);
        }
        $data = array(
            'name' => $name,
            'diachi' => $diachi,
            'dt' => $dt,
            'count' => $count
        );
        unset($_SESSION['cart']);
        $this->load->view('confirm', $data);
    }
}
<?php
    namespace App\Controllers;

    use \App\Models\CommentModel;

    class CommentController {

        public function __construct(){
            $this->commentModel = new CommentModel;
        }

        public function showComments(){
            $comments = $this->commentModel->getAllComments();
            $data = $comments;
            return $data;
        }

        public function showUnnaprovedComments(){
            $comments = $this->commentModel->unapprovedComments();
            $data = $comments;
            return $data;
        }



        public function approveComments(){
            if(isset($_POST['update_id'])){
                $id = $_POST['update_id'];
                if(isset($_POST['approve'])){
                    if($this->commentModel->approveComment($id)){
                        header("Location: admin.php");
                    }
                } elseif(isset($_POST['delete'])){
                    if($this->commentModel->deleteComment($id)){
                        header("Location: admin.php");
                    }
                }
            }
            
        }

        public function addComent(){
            if(isset($_POST['submit'])){
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'name'                  => trim($_POST['name']),
                    'email'                 => trim($_POST['email']),
                    'message'               => trim($_POST['message']),
                    'name_err'              => '',
                    'email_err'             => '',
                    'message_err'           => ''
                ];

                // Validite Name
                if(empty($data['name'])){
                    $data['name_err'] = 'Please Enter Name';
                }

                // Validite Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please Enter Email';
                }

                // Validite Message
                if(empty($data['message'])){
                    $data['message_err'] = 'Please Enter Message';
                }

                if(empty($data['name_err']) && empty($data['email_err']) && empty($data['message_err'])){

                    if($this->commentModel->addComment($data)){
                        header("Location: index.php");
                    }
                } else {
                    return $data;
                }

            } else {
                $data = [
                    'name'                  => '',
                    'email'                 => '',
                    'message'               => '',
                    'name_err'              => '',
                    'email_err'             => '',
                    'message_err'           => ''
                ];
                return $data;
            }
        }
    }
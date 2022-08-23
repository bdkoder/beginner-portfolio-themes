
<section class="contact_section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-title text-center">
                    <h2>contact me</h2>
                    <p>Want to discuss a project? Just fill in the form below and I’ll get back to you ASAP!</p>
                </div>
            </div>
        </div>
        <div class="row contact_padding">
            <div class="col-md-offset-1 col-md-10">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-map-marker"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Address:</p>
                            <h4>Bogra, Rajshahi, Bangladesh</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-mobile"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Phone:</p>
                            <a href="tel:+8801793330005"><h4>+880179 333 0005</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Email:</p>
                            <a href="mailto:bdkoder@gmail.com"><h4>bdkoder@gmail.com</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="style_form">





<?php

/**
* 
*/
class Message
{
    
    protected $connection;
    
    public function __construct() {
        //        echo '<pre>';
//        print_r($data);
//        exit();
        
        $host_name = 'localhost';
        $user_name = 'root';
        $user_pass = '';
        $db_name = 'portfoliomessage';
                
        $this->connection = mysqli_connect($host_name, $user_name, $user_pass, $db_name);
//        $connection = mysqli_connect($host_name, $user_name, $user_pass, $db_name);
//        echo'<pre>';
//        print_r($connecttion);
//        exit();
//        if (!$connection){
        if (!$this->connection){
            //die('Connection Failed'.mysqli_error($connection));
            die('Connection Failed'.mysqli_error($this->connection));
        }
    }


     public function save_message($data) {
         // print_r($data);
         // exit();

        $sql = "INSERT INTO portfoliomessage (name,email,subject,text,viewstatus) VALUES ('$data[name]','$data[email]','$data[subject]','$data[message]','0')";
       // print_r($sql);
       // mysqli_query($connection, $sql);
        //if(mysqli_query($connection, $sql)){
        if(mysqli_query($this->connection, $sql)){
            $msg = 'Message Send Success.';
            return $msg;
        }else{
            //die('Query Problem'.mysqli_error($connection));
            die('Query Problem'.mysqli_error($this->connection));
        }
    }
}


if (isset($_POST['btn'])) {
    $obj = new Message();
    $msg = $obj->save_message($_POST);


}




 ?>















                        <form id="myform" method="POST" action="" class="form-inline">
                            <div class="row input_padding">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="name_input">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name..." required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="email_input">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="subject_input">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="message_input">
                                        <textarea rows="6" name="message" id="exampleTextarea" class="form-control" placeholder="How can I help?" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="submit_input">
                                        <button type="submit" name="btn" id="submit" class="btn btn-default">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="submit_input text-right">
                                        
                                        <label>  <?php if(isset($msg)){ echo '<i class="fa fa-check"></i>'.'  '. $msg;}?></label>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
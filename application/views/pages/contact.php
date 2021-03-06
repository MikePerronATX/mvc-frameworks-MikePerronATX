<!--
Name: Michael Perron
Final Project
Purpose: This page is the contact form template body.
-->
<div class="body-div">
    <div class="bodyCon-div">
        <h1 class="contactTitleColor">Contact Form</h1>
            <hr>
        <h4 class="contactSubColor">Enter Your Contact Information:</h2>
        <!-- <div class= "form-box"> -->
            <div class="form">
                <form id="email-form" name="email-form">
                    <div class="col-sm-12">Name
                        <input type="text" id="name" placeholder="name" name="name" maxlength="64"><br>
                    </div>
                    <div class="col-sm-12">Subject
                        <input type="text" id="subject" placeholder="subject" name="subject" maxlength="64"><br>
                    </div>
                    <div class="col-sm-12">Email
                        <input type="text" id="from" placeholder="email" name="from" maxlength="64"><br>
                    </div>
                    <div class="col-sm-12">Confirm Email
                        <input type="text" id="re_from" placeholder="confirm email" name="re_from" maxlength="64"><br>
                    </div>
                    <div class="col-sm-12">Message
                        <textarea class="form-control rounded-0" id="message" placeholder="message" name="message" rows="3" maxlength="1000"></textarea>
                    </div>
                    <div class="input-div">
                        <button id="names-send" type="button" class="">Send</button>
                        <button id="names-clear" type="button" class="">Clear</button>
                    </div>
                </form>
                <div id="msg">
                    <!-- message appears here -->
                    <br>
                </div>
            </div>    
        <!-- </div> -->
    </div>
</div>
<!-- jQuery must be loaded before any other JS that uses jQuery -->
<script src=/assets/js/jquery.min.js></script>
<script src=/assets/js/main.js></script>
<script src=/assets/js/email.js></script>
<script src=/assets/js/bootstrap.min.js></script>
<?php
include ("header.php");
?>
<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block03">
            <div class="col-2-3">
                <div class="wrap-col">
                    <article class="contact_form">
                        <div class="comment_box">
                            <form class="comment_form" action="sendmail.php" method="post">
                                <label for="user_name">
                                    <span>Name</span>
                                    <input id="user_name" class="user_names" name="user_name" type="text" required>
                                </label>
                                <label for="user_email">
                                    <span>Email</span>
                                    <input id="user_email" class="user_names"  name="user_email" type="text" required>
                                </label>
                                <label for="subject">
                                    <span>Subject</span>
                                    <input id="subject" class="user_names"  name="user_subject" type="text" required>
                                </label>
                                <label for="user_message">
                                    <span>Your Message</span>
                                    <textarea id="user_message" class="user_names" name="user_message" rows="8"></textarea> 
                                </label>
                                <input class="submit_class" name="send_mail" type="submit" value="Send Mail">
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>Find Us</h2></div>
                        <div class="content">
                            <iframe style="margin-bottom:30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.776009745376!2d28.891483515835667!3d47.04462593462146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c91fd7f9011%3A0x376687967bf2b6e0!2sStrada+Petru+Zadnipru+15%2F2%2C+Chi%C8%99in%C4%83u+2044%2C+Moldova!5e0!3m2!1sen!2sbd!4v1454586526969" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <ul>
                                <?php
                                $all_contact = $obj->getAll("settings", "*");
                                ?>
                                <li>Address :<?php echo $all_contact[0]['key_value']; ?> </li>
                                <li>Phone : <?php echo $all_contact[1]['key_value']; ?> </li>
                                <li>Email : <?php echo $all_contact[2]['key_value']; ?> </li>
                                <li>Website : <?php echo $all_contact[3]['key_value']; ?> </li>
                                <li>Fax : <?php echo $all_contact[4]['key_value']; ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './footer.php'; ?>
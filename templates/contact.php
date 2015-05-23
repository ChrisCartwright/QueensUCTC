

<form id="form2" action="send.php" method="post">
    <h3><span>Contact Us</span></h3>
    <fieldset><legend>Contact form</legend>
        <p class="first">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First Name" required maxlength="25" />
        </p>
        <p>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" required maxlength="25" />
        </p>
        <p class="third">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" required maxlength="40" />
        </p>
        <p>
            <label id="Lblmessage" for="message">Message</label>
            <textarea name="message" id="message" placeholder="Message" required maxlength="10000" style="height: 20em;"></textarea>
        </p>

        <p class="submit"><input type="submit" name="submit" value="Send" /></p>

    </fieldset>
</form>


<form id="form2" action="send.php" method="post">
    <fieldset><legend>Contact form</legend>
        <div class="form-inline">
            <p>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="First Name" required maxlength="25" />
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required maxlength="25" />
            </p>
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required maxlength="40" />
            </p>
        </div>
        <div class="form-inline">
            <p>
                <label id="Lblmessage" for="message">Message</label>
                <textarea name="message" id="message" placeholder="Message" required maxlength="10000" ></textarea>

            </p>
            <p>
                <input type="submit" name="submit" value="Send" />
            </p>
        </div>

    </fieldset>
</form>
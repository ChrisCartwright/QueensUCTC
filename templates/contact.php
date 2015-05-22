<form action="send.php" method="post">

    <ul>

        <li>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First Name" required maxlength="25" />
        </li>

        <li>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" required maxlength="25" />
        </li>

        <li>
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Email" required maxlength="40" />
        </li>

        <li>
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Message" required maxlength="10000" style="height: 30em;"></textarea>
        </li>

    </ul>

    <div class="buttons">
        <input type="submit" name="submit" value="Send" />

    </div>

</form>
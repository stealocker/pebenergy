<section class="contact grid">
    <h2><?php echo esc_html($attributes['headline']); ?></h2>
    <form class="contact__form" action="/submit-form" method="post">
        <p>Hi, mein Name ist<label for="name"></label><input type="text" id="name" name="name" required> und ihr erreicht mich unter<label for="email"></label>
            <input type="email" id="email" name="email">. Ich komme mit folgendem Anliegen zu euch:<label for="inquiry"></label>
            <select id="inquiry" name="inquiry">
                <option value="general">General Question</option>
                <option value="support">Technical Support</option>
                <option value="billing">Billing Issue</option>
                <option value="other">Other</option>
            </select>. Vielleicht könnt ihr mir hierbei helfen:
        </p>
        <label for="message"></label>
        <textarea id="message" name="message" rows="5"></textarea>
        <label for="dsgvo">Bevor ihr fragt, ja ich habe die <a href="<?php echo esc_url($attributes['link']); ?>">Datenschutzerklärung</a> gelesen und bin mit der Verarbeitung meiner personenbezogenen Daten einverstanden, deshalb setze ich hier mein Häkchen:</label> <input type="checkbox" id="dsgvo" name="dsgvo" value="no" required>
        <button class="button--primary" type="submit">Send Message</button>
    </form>
</section>
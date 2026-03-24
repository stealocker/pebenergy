<section class="contact grid">
    <h2><?php echo esc_html($attributes['headline']); ?></h2>
    <form id="contact-form" class="contact__form" action="#">
        <p>Hi, mein Name ist <label for="name"></label><input type="text" id="name" name="name" required> und ihr erreicht mich unter<label for="email"></label>
            <input type="email" id="email" name="email">. Ich komme mit folgendem Anliegen zu euch:<label for="inquiry"></label>
            <span class="select"><select id="inquiry" name="inquiry">
                <option value="general">allgemeine Frage</option>
                <option value="interest">ich habe Interesse</option>
                <option value="existingBuilding">EMS im Bestandsgebäude</option>
                <option value="newBuilding">EMS im Neubau</option>
            </select></span>. Vielleicht könnt ihr mir hierbei helfen:
        </p>
        <label for="message"></label>
        <textarea id="message" name="message" rows="5"></textarea>
        <div class="dsgvo-wrapper"><label class="dsgvo" for="dsgvo">Bevor ihr fragt, ja ich habe die <a href="<?php echo esc_url($attributes['link']); ?>">Datenschutzerklärung</a> gelesen und bin mit der Verarbeitung meiner personenbezogenen Daten einverstanden, deshalb setze ich hier mein Häkchen: <input type="checkbox" id="dsgvo" name="dsgvo" required><span class="checkmark"></span></label></div>
        <button class="button--primary" type="submit">Senden</button>
    </form>
</section>

<script>
    (function($){
    // Wait until the DOM is ready
    $(function(){

        // Use document delegation to ensure the handler always attaches
        $(document).on('submit', '#contact-form', function(e){
            e.preventDefault();               // Stop normal submit
            e.stopImmediatePropagation();     // Prevent other handlers from firing
            var $form = $(this);

            // Collect form data
            var inquiryText = $('#inquiry option:selected').text();
            var formData = {
                action: 'contact_form',
                name: $form.find('#name').val(),
                email: $form.find('#email').val(),
                message: $form.find('#message').val(),
                inquiry: inquiryText
            };

            // Send AJAX
            $.ajax({
                url: contact_form.ajaxurl,  // MUST use localized URL from PHP
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response){
                    if(response.success){

                        alert('Ihre Nachricht wurde erfolgreich gesendet');
                        console.log('AJAX success:', response);
                        $form[0].reset(); // reset form
                    } else {
                        alert('Error sending message.');
                        console.log(response);
                    }
                },
                error: function(xhr, status, error){
                    console.error('AJAX failed:', xhr.responseText || error);
                }
            });

            return false; // Extra safety
        });

    });
})(jQuery);
</script>
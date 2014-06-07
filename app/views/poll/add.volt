<h1>Add Option</h1>

<form method="post">
    <p>
        Name {{ text_field('name') }}
    </p>

    <p>
        {{ submit_button('Save') }}
        {{ link_to('poll/', 'cancel') }}

    </p>
</form>
<h1>Add User</h1>

<form method="post">
    <p>
        Name {{ text_field('name') }}
    </p>

    <p>
        Last Name {{ text_field('last_name') }}
    </p>

    <p>
        Mail {{ text_field('mail') }}
    </p>

    <p>
        Address {{ text_field('address') }}
    </p>

    <p>
        {{ submit_button('Save') }}
        {{ link_to('users/', 'cancel') }}

    </p>
</form>
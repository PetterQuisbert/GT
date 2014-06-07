<h1>{{ user.name }}</h1>

<p>
    {{ link_to('users/add/' ~ user.id, 'Add User') }}
    {{ link_to('users/', 'Go Back') }}
</p>

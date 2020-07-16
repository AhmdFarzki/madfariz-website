<div class="text-center">
    <img class="navbar-brand logo_h" src="{{ url('img/logo.png')}} " alt="" /></img>
    <h2>New Message!</h2> <br>

    You have got an email from : {{ $name }} <br>
</div>

<br><br>

<dl class="row">
    <dt class="col-sm-3">Name:</dt>
    <dd class="col-sm-9">
        <b>{{ $name }}</b>
    </dd>

    <dt class="col-sm-3">Email:</dt>
    <dd class="col-sm-9">
        <p>{{ $email }}</p>
    </dd>

    <dt class="col-sm-3">Message:</dt>
    <dd class="col-sm-9">{{ $user_query }}</dd>

</dl>

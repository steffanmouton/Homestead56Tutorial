@if ($errors->any())
    <div class="notification is-danger" style="margin-top: 10px">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

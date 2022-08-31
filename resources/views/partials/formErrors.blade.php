

@if(count($errors) > 0)
    <div class="alert alert-message">
        <ul style="list-style: none;font-size: 20px;font-weight: bold;color: #ff1d0f;text-align: center">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

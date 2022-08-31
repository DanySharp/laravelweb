

<script type="text/javascript">
    $(".btn-open").click(function(){
        $('.form-reply').css('display', 'none')
        var service = this.id
        var service_id = '#f-' + service
        $(service_id).show('slow');
    })
</script>


@foreach($comment as $comment)
    <div class="mb-4 ml-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">نظر کاربر</h5>
            {{$comment->description}}
            <div  class=" mt-2 mb-2 row">

                <div  class="col-md-8 mb-3 ">
                    <input type="submit" value="ارسال پاسخ" style="font-size: 12px  ;max-width: 100px;max-height: 25px" class="btn btn-behance btn-open" id="div-comment-{{$comment->id}}">  </input>
                </div>

                <div  class="form-reply col-md-12" id="f-div-comment-{{$comment->id}}" style="display: none">
                    <div class="form-group">
                        {!! Form::open(['method' => 'POST','route' =>['frontend.comments.reply']]) !!}

                        {!! Form::hidden('parent_id',$comment->id) !!}
                        {!! Form::hidden('post_id',$post->id) !!}
                        {!! Form::label('description', 'متن :') !!}
                        {!! Form::textarea('description', null,['class'=>'form-control']) !!}



                        <div  class="form-group ">
                            {!! Form::submit('ارسال پاسخ ',['class'=>'btn btn-success ', 'style' => 'width:120px']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>


                @include('partials.comments', ['comment' => $comment->replies])


            </div>
        </div>
@endforeach

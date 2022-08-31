

{{--<script type="text/javascript">--}}
{{--    $(".btn-open").click(function(){--}}
{{--        $('.form-reply').css('display', 'none')--}}
{{--        var service = this.id--}}
{{--        var service_id = '#f-' + service--}}
{{--        $(service_id).show('slow');--}}
{{--    })--}}
{{--</script>--}}


@foreach($comment as $comment)
    <div style="font-family: 'B Yekan'" class="mb-4 ml-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">{{$comment->comment_name}} </h5>

            <td>{{$comment->description}}</td>
            <div  class=" mt-2 mb-2 row">







        </div>
    </div>
@endforeach

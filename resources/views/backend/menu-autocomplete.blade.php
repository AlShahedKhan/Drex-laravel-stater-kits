<ul class="serch-sagetion">
    @foreach($targets as $target)
    <li class="single-list">
        <a href="{{url($target->url)}}" class="singlePage-link">{{$target->url}}</a>
    </li>
    @endforeach
</ul>

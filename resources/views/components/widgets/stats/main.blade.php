@if(!empty($stats))
    <ul class="stats">
        @foreach($stats as $stat)
            <x-widgets.stats.item :text="$stat['text']" :count="$stat['count']"/>
        @endforeach
    </ul>
@endif

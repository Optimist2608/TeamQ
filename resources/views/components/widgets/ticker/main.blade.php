@if(!empty($messages))
    <div class="ticker" aria-hidden="true">
        <div class="ticker__band">
            <div class="ticker__track">
                @foreach($messages as $message)
                    <x-widgets.ticker.item :message="$message"/>
                @endforeach
            </div>
        </div>
    </div>
@endif

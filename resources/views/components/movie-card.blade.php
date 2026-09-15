<div class="card" data-bs-theme="dark">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <p class="card-text">( {{ $original_title }} )</p>
    </div>
    <div class="card-body d-flex flex-column justify-content-between">
        <p class="card-text">{{ $nationality }}</p>
        <h5 class="card-text">{{ $date }}</h5>
    </div>
    <div class="card-footer vote d-flex">
        @php
            $truncated_vote = (int)floor($vote->toHtml());
            $remaining_vote = $vote->toHtml() - $truncated_vote;
            $numberOfStars = 0;
        @endphp
            @while($numberOfStars < $truncated_vote)
                <img class="vote-star" src="{{ Vite::asset("resources/img/star_full.png") }}">
                @php $numberOfStars++; @endphp
            @endwhile
            @if($remaining_vote >= 0.5)
                <img class="vote-star" src="{{  Vite::asset("resources/img/star_half.png") }}">
                @php $numberOfStars++; @endphp
                @while($numberOfStars < 10)
                <img class="vote-star" src="{{ Vite::asset("resources/img/star_empty.png") }}">
                @php $numberOfStars++; @endphp
                @endwhile
            @else
                @while($numberOfStars < 10)
                <img class="vote-star" src="{{ Vite::asset("resources/img/star_empty.png") }}">
                @php $numberOfStars++; @endphp
                @endwhile
            @endif

            ({{ $vote }})
    </div>

</div>
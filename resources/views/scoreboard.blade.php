@foreach($players as $p)
#{{ $loop->index + 1 }} {{ $p->name }} {{ $p->total_score }} 
@endforeach
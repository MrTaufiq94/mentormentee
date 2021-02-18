{{$mentor->staff->Nama}}

@forelse ($mentor->getStudent as $mentee)
{{$mentee['RKD01_Nomatrik']}}
{{dd ($mentee['RKD01_Nama'])}}
@empty
No mentee
@endforelse
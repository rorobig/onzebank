Beste {{$user->name}},
{!!"<br>"!!}

U heeft zojuist een verzoek ingediend om een nieuw account aan te maken. Vanwege veiligheidsredenen moeten wij uw account verifiëren voordat u zich aanmeldt.
{!!"<br>"!!}
Om uw account te verifiëren <a href="{{route('sendEmailDone',[ 'email' => $user->email,'verifyToken'=> $user->verifyToken ])}}" >Click here</a>
{!!"<br>"!!}
{!!"<br>"!!}

Hoogachtend,
{!!"<br>"!!}
Onzebank
{!!"<br>"!!}
Groningen
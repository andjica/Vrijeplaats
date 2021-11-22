<ul class="list-group">
          <li class="list-group-item"><a href="{{asset('/bewerk-profiel')}}" class="btn  btn-sm btn-success">Bewerk profiel</a></li>
          <li class="list-group-item"><a href="" class="btn  btn-sm btn-success"><i class="fas fa-shopping-cart" ></i>&nbsp;Uw aankopen</a></li>
          @if(auth()->user()->role_id == 3)
          <li class="list-group-item"><a href="{{asset('/add-adv')}}" class="btn  btn-sm btn-success">Een nieuwe advertentie maken</a></li>
          @else 
          <li class="list-group-item">Porta ac consectetur ac</li>
          @endif
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
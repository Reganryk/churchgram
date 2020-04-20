 <!-- loop starts here -->

  <a href="#{{ $notify->data['post']['id'] }}" class="dropdown-link" id="markAsRead" >
    <div class="media">
      <img src="{{ URL::to('/') }}/storage/users/profilepics/ {{ $notify->data['userprofile']['propic'] }}" alt="">
      <div class="media-body" >
        <div style="height: 50px; text-overflow: hidden !important; overflow: hidden !important;">
          <strong>{{ $notify->data['user']['uname'] }} </strong>Liked your Post<br>
         <span style="height: 40px; text-overflow: hidden !important; overflow: hidden !important;"> <i >{{ $notify->data['post']['body'] }}</i></span>

        </div>

        <span>{{ $notify->data['created_at'] }}</span>
      </div>
    </div><!-- media -->
  </a>
  <!-- loop ends here -->


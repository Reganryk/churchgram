   <div class="chat-sidebar chat-room" style="position: fixed; ">

            <div style=" text-align: center; background-color:#1B84E7; ">
                <span style="color: white; font-size: 16px;padding: 8px;">Online Twins</span>
            </div>

              <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list ">
                <div class="scrollbarright" id="mainscroll" style="padding: 2px;">



                    @foreach(Auth::user()->usertwins->where('is_confirmed',True) as $twin)

                        @if($twin->usertwin->isOnline())
                           <li>
                        <a href="#contact-4" data-toggle="tab">
                        <div class="contact">
                            <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $twin->usertwin->userprofile->propic}}" alt="" class="profile-photo-sm pull-left"/>
                            <div class="msg-preview">
                                <span style="margin-top: 2px;">{{ $twin->usertwin->uname }}</span>

                               <span class="chat-alert pull-right"></span>

                            </div>
                        </div>
                        </a>
                    </li>
                         @else
                        @endif

                    @endforeach

                    @foreach(Auth::user()->usertwins->where('is_confirmed',True) as $twin)

                        @if($twin->usertwin->isOnline())
                         @else
                        <li>
                      <a href="#contact-4" data-toggle="tab">
                            <div class="contact" style="color:#ABB1BA">
                            <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $twin->usertwin->userprofile->propic}}" alt="" class="profile-photo-sm pull-left"/>
                            <div class="msg-preview">
                                <span style="margin-top: 2px;">{{ $twin->usertwin->uname }}</span>
                               <span class="chat-alert2 pull-right"></span>

                            </div>
                        </div>
                         </a>
                       </li>
                        @endif

                    @endforeach







                </div>

                  </ul><!--Contact List in Left End-->
        </div>


  <style>
            @media only screen and (max-width : 540px)
            {
                .chat-sidebar
                {
                    display: none !important;
                }

                .chat-popup
                {
                    display: none !important;
                }
            }

            body
            {
                background-color: #FFFFFF;
            }

            .chat-sidebar
            {
                width: 164px;
                position: fixed;
                border-radius: 8px;
                height: 84%;
                right: 0px;
                top: 15%;
                background-color: #fff;
                padding-top: 10px;
                padding-bottom: 10px;
                border: 1px solid #E9EBEE;
            }

            .sidebar-name
            {
                padding-left: 10px;
                padding-right: 10px;
                padding: 3px;
                margin-bottom: 2px;
                margin-top: 2px;
                font-size: 12px;
                font-weight: 300;
            }

            .sidebar-name span
            {
                padding-left: 5px;
            }

            .sidebar-name a
            {
                display: block;
                height: 100%;
                text-decoration: none;
                color: inherit;
            }
            .dot{
                background-color: red;
                height: 10px;
                width: 10px;
                border-radius: 100%;
                padding-left: 20px;
            }




            .sidebar-name:hover
            {
                color:#fff;
                 background-color:#1CAF9A;
            }

            .sidebar-name img
            {
                width: 27px;
                height: 27px;
                vertical-align:middle;
            }

            .popup-box
            {
                display: none;
                position: fixed;
                bottom: 0px;
                right: 220px;
                height: 285px;
                background-color: rgb(237, 239, 244);
                width: 300px;
                border: 1px solid rgba(29, 49, 91, .3);
            }

            .popup-box .popup-head
            {
                background-color: #6d84b4;
                padding: 9px;
                color: white;
                font-weight: bold;
                font-size: 14px;
                clear: both;
            }

            .popup-box .popup-head .popup-head-left
            {
                float: left;
            }

            .popup-box .popup-head .popup-head-right
            {
                float: right;
                opacity: 0.5;
            }

            .popup-box .popup-head .popup-head-right a
            {
                text-decoration: none;
                color: inherit;
            }

            .popup-box .popup-messages
            {
                height: 60%;
                overflow-y: scroll;
            }
            .popup-type
            {
                height: 40%;
                overflow-y: scroll;
            }

                        .status {
              width: 9px;
              height: 9px;
              border-radius: 50%;
              display: inline-block;
              box-shadow: inset 0 0 3px 0 rgba(0, 0, 0, 0.2);
              border: 1px solid rgba(0, 0, 0, 0.15);
              background: #1CAF9A;
              margin-top: 8px;
              margin-left: 20px;
              align-self: right;
              align-items: right;
              align-content: right;
              position: fixed;
            }

                        .online {
              background: #1CAF9A;
}

        </style>

        <script>
            //this function can remove a array element.
            Array.remove = function(array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
            };

            //this variable represents the total number of popups can be displayed according to the viewport width
            var total_popups = 0;

            //arrays of popups ids
            var popups = [];

            //this is used to close a popup
            function close_popup(id)
            {
                for(var iii = 0; iii < popups.length; iii++)
                {
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);

                        document.getElementById(id).style.display = "none";

                        calculate_popups();

                        return;
                    }
                }
            }

            //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
            function display_popups()
            {
                var right = 220;

                var iii = 0;
                for(iii; iii < total_popups; iii++)
                {
                    if(popups[iii] != undefined)
                    {
                        var element = document.getElementById(popups[iii]);
                        element.style.right = right + "px";
                        right = right + 320;
                        element.style.display = "block";
                    }
                }

                for(var jjj = iii; jjj < popups.length; jjj++)
                {
                    var element = document.getElementById(popups[jjj]);
                    element.style.display = "none";
                }
            }

            //creates markup for a new popup. Adds the id to popups array.
            function register_popup(id, name)
            {

                for(var iii = 0; iii < popups.length; iii++)
                {
                    //already registered. Bring it to front.
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);

                        popups.unshift(id);

                        calculate_popups();


                        return;
                    }
                }

                var element = '<div class="popup-box chat-popup" id="'+ id +'">';
                element = element + '<div class="popup-head">';
                element = element + '<div class="popup-head-left">'+ name +'</div>';
                element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
                element = element + '<div style="clear: both"></div></div><div class="popup-messages">messages..</div>';
                element = element + '<div class="popup-type">type..</div></div>';

                document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;

                popups.unshift(id);

                calculate_popups();

            }

            //calculate the total number of popups suitable and then populate the toatal_popups variable.
            function calculate_popups()
            {
                var width = window.innerWidth;
                if(width < 540)
                {
                    total_popups = 0;
                }
                else
                {
                    width = width - 200;
                    //320 is width of a single popup box
                    total_popups = parseInt(width/320);
                }

                display_popups();

            }

            //recalculate when window is loaded and also when window is resized.
            window.addEventListener("resize", calculate_popups);
            window.addEventListener("load", calculate_popups);

        </script>

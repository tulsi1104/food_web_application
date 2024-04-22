<x-userlayout>
    <style>
            .proceed-button{
                padding:10px;
                width:100%;
                background-color: #1d283c;
                color:white;
                border-radius: 10px;
                margin-bottom:15px;
                position: relative;
            }
    </style>
    <div class="">
        <form action="{{ route('logout.logout') }}" method="POST" id="logoutForm">
        @csrf
            <button class="proceed-button" id="checkbox-count">
                Log Out
            </button>
        </form>
    </div>
</x-userlayout>

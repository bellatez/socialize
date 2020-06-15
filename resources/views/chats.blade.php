@extends('layouts.app')

@section('content')
    <div class="container mt-5 container-msg">
        <div class="card" id="msg-box">
            <div class="card-header">
                <h2>Your Chats with {{ $receiver->name }}</h2>
            </div>
            <div class="card-body" id="message-body">
                @foreach($chats as $chat)
                    @if($chat->user_id == request()->route('id') && $chat->receiver_id == Auth::user()->id)
                        <div class="text-2 float-left bg-primary mt-3 p-2 border border-rounded">
                        </div>
                        <div class="clearfix"></div>
                    @endif
                    @if($chat->user_id == Auth::user()->id && $chat->receiver_id == request()->route('id'))
                        <div class="text-2 float-right bg-warning mt-3 p-2 border border-rounded">
                            {{$chat->message}}
                        </div>
                        <div class="clearfix"></div>
                    @endif
                @endforeach
            </div>
            <div class="card-footer" id="message-input">
                <form action="{{Route('chats.save')}}" method="POST">
                    @csrf
                    <input type="hidden" name="receiver_id" value= "{{request()->route('id')}}">
                    <input type="text" class="float-left" name="message" placeholder="enter Message" autofocus>
                    <button type="submit" class="btn btn-success float-right" name="submit">Send</button>
                </form>
            </div>
            <div class="clear-fix"></div>
        </div>
    </div>
@endsection

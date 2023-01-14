@extends('layouts.mitra.app')
@section('content')
    <script>
        var otomatis = setInterval(
            function() {
                $('#chatArea').load('{{ route('mitra.chat.seger', $idrefresh) }}').fadeIn("slow");
            }, 1000);
    </script>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="body">
                                <div id="plist" class="people-list">
                                    <div class="chat-search">
                                        <input type="text" class="form-control" placeholder="Search..." />
                                    </div>
                                    <div class="m-b-20">
                                        <div id="chat-scroll">
                                            <ul class="chat-list list-unstyled m-b-0" wire:poll="render">
                                                @foreach ($users as $user)
                                                    <a href="{{ route('mitra.chat.show', $user->kandidat->user->id) }}">
                                                        <li class="clearfix {{ request()->is($user->kandidat->user->id) ? 'active' : '' }}"
                                                            wire:click="getUser({{ $user->kandidat->user->id }})"
                                                            id="user_{{ $user->kandidat->user->id }}">
                                                            <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
                                                                alt="avatar">
                                                            <div class="about">
                                                                <div class="name">{{ $user->kandidat->user->name }}</div>
                                                                @if ($user->kandidat->user->status == 'online')
                                                                    <div class="status"><i
                                                                            class="fa fa-circle text-success online-icon"></i>
                                                                        Online
                                                                    </div>
                                                                @else<div class="status"><i
                                                                            class="fa fa-circle online-icon"></i>
                                                                        Offline </div>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    </a>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="card">
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
                                        alt="avatar">
                                    <div class="chat-about">
                                        <div class="chat-with" wire:poll="render">{{ $user->kandidat->user->name }}</div>
                                        <div class="chat-num-messages">2 new messages</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box" id="mychatbox">
                                <div class="card-body chat-content" id="chatArea">
                                    @include('mitra.chat.chatbox')
                                </div>
                                <div class="card-footer chat-form">
                                    <form id="sendform">
                                        <input wire:model="message" type="text" class="form-control"
                                            placeholder="Type a message" id="text" name="text">
                                        <input type="hidden" value="{{ $idrefresh }}" name="id">
                                        <button class="btn btn-primary" id="submitform">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

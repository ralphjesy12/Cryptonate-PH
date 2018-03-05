@extends('layouts.dashboard')

@section('content')
    <div class="pusher">
        <div class="wrapper">
            <div class="ui top fixed menu">
                <a class="item">
                    <i class="icon gripfire"></i>Prototype
                </a>
                <div class="right menu">
                        <div class="ui dropdown item">
                            <div class="text">
                                <img class="ui avatar image" src="{{ asset('/img/avatar/user-avatar-1.png') }}">
                                Jenny Hess
                            </div>
                             <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item">Profile</a>
                                <a class="item">Logout</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="sidebar-wrapper pt-5">
                <div class="ui vertical inverted sticky menu top">
                    <div class="item">
                        <div class="header">Introduction</div>
                        <div class="menu">

                            <a class="item" href="/introduction/integrations.html">
                                Integrations
                            </a>

                            <a class="item" href="/introduction/build-tools.html">
                                Build Tools
                            </a>

                            <a class="item" href="/introduction/advanced-usage.html">
                                Recipes
                            </a>

                            <a class="item" href="/introduction/glossary.html">
                                Glossary
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper p-5 mt-5">

                <div class="ui segment m-0 p-5">
                    <h2 class="ui header">
                        Edit Profile
                        <div class="sub header">
                            Setup your account, edit profile details & change password
                        </div>
                    </h2>
                    <form class="ui form" style="max-width:800px">
                        <h4 class="ui dividing header">Personal Information</h4>
                        <div class="field">
                            <label>Fullname</label>
                            <div class="two fields">
                                <div class="field">
                                    <input type="text" name="firstname" placeholder="First Name">
                                </div>
                                <div class="field">
                                    <input type="text" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <h4 class="ui dividing header">Account Settings</h4>
                        <div class="field">
                            <div class="two fields">
                                <div class="field">
                                    <label>Username</label>
                                    <input type="text" name="username">
                                </div>
                                <div class="field">
                                    <label>Email Address</label>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Old Password</label>
                                    <input type="password" name="old_password">
                                </div>
                                <div class="field">
                                    <label>New Password</label>
                                    <input type="password" name="new_password">
                                </div>
                            </div>
                        </div>
                        <h4 class="ui dividing header">Organization Details</h4>
                        <div class="field">
                            <div class="two fields">
                                <div class="field">
                                    <label>Company Name</label>
                                    <input type="text" name="company">
                                </div>
                                <div class="field">
                                    <label>Position</label>
                                    <input type="text" name="position">
                                </div>
                            </div>
                        </div>
                        <div class="ui hidden divider"></div>
                        <button class="ui button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

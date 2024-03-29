@extends('client.layout')

@section('title') All Project @endsection

@section('content')
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="chat-leftsidebar border">
            <div class="px-4 pt-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 d-block d-lg-none me-3">
                            <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                    <img src="http://localhost/wbcrm/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                    <span class="user-status"></span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                    <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>Online</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0" style="position: absolute;right: 6px;">
                        <div class="dropdown">
                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">New Group</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-box mt-3">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                    <i class="ri-search-2-line search-icon"></i>
                </div>
            </div> <!-- .p-4 -->

            <ul class="nav nav-tabs nav-tabs-custom nav-info nav-justified" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab" aria-selected="false" tabindex="-1">
                        Chats
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab" aria-selected="true">
                        Contacts
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#groups" role="tab" aria-selected="true">
                        Groups
                    </a>
                </li>
            </ul>

            <div class="tab-content text-muted">
                <div class="tab-pane  active show" id="chats" role="tabpanel">
                    <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                         aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px 0px 0px;">

                                            <div class="chat-message-list">

                                                <ul class="list-unstyled chat-list chat-user-list" id="userList">

                                                    <li id="contact-id-1" data-name="direct-message" class="active"><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Lisa Parker</p></div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-2" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);" class="unread-msg-user">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Frank Thomas</p>
                                                                </div>
                                                                <div class="ms-auto"><span
                                                                        class="badge bg-dark-subtle text-body rounded p-1">8</span>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-3" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary text-white fs-10">
                                                                            CT
                                                                        </div>
                                                                        <span class="user-status"></span></div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Clifford Taylor</p>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-4" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Janette Caster</p>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-5" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);" class="unread-msg-user">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Sarah Beattie</p>
                                                                </div>
                                                                <div class="ms-auto"><span
                                                                        class="badge bg-dark-subtle text-body rounded p-1">5</span>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-6" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);" class="unread-msg-user">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-6.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Nellie Cornett</p>
                                                                </div>
                                                                <div class="ms-auto"><span
                                                                        class="badge bg-dark-subtle text-body rounded p-1">2</span>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-7" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary text-white fs-10">
                                                                            CK
                                                                        </div>
                                                                        <span class="user-status"></span></div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Chris Kiernan</p>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-8" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary text-white fs-10">
                                                                            EE
                                                                        </div>
                                                                        <span class="user-status"></span></div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Edith Evans</p></div>
                                                            </div>
                                                        </a></li>
                                                    <li id="contact-id-9" data-name="direct-message" class=""><a
                                                            href="javascript: void(0);">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-7.jpg') }}"
                                                                            class="rounded-circle img-fluid userprofile"
                                                                            alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden"><p
                                                                        class="text-truncate mb-0">Joseph Siegel</p>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>

                                            <!-- End chat-message-list -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 298px; height: 653px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                 style="height: 579px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="contacts" role="tabpanel">
                    <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init"
                         style="max-height: calc(100vh - 305px);">
                        <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                         aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                            <div class="sort-contact">
                                                <div class="mt-3">
                                                    <div class="contact-list-title">A</div>
                                                    <ul id="contact-sort-A" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">AC</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Alice Cruickshank</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">B</div>
                                                    <ul id="contact-sort-B" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Barrett Brown</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">C</div>
                                                    <ul id="contact-sort-C" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">CK</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Chris Kiernan</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">CT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Clifford Taylor</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">E</div>
                                                    <ul id="contact-sort-E" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">EE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Edith Evans</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">F</div>
                                                    <ul id="contact-sort-F" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Frank Thomas</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">G</div>
                                                    <ul id="contact-sort-G" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">GB</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Gilbert Beer</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">J</div>
                                                    <ul id="contact-sort-J" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Janette Caster</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-7.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Joseph Siegel</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Justyn Wisoky</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">K</div>
                                                    <ul id="contact-sort-K" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Keaton King</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">L</div>
                                                    <ul id="contact-sort-L" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">Lisa
                                                                        Parker</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">M</div>
                                                    <ul id="contact-sort-M" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">MM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Marian Moen</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">N</div>
                                                    <ul id="contact-sort-N" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-6.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Nellie Cornett</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">R</div>
                                                    <ul id="contact-sort-R" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><span
                                                                            class="avatar-title rounded-circle bg-primary fs-10">RD</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Ronald Downey</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">S</div>
                                                    <ul id="contact-sort-S" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Sarah Beattie</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">V</div>
                                                    <ul id="contact-sort-V" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Victor Beahan</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="contact-list-title">W</div>
                                                    <ul id="contact-sort-W" class="list-unstyled contact-list">
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xxs"><img
                                                                            src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                                            class="img-fluid rounded-circle" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1"><p
                                                                        class="text-truncate contactlist-name mb-0">
                                                                        Wayne Runte</p></div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown"><a href="#" class="text-muted"
                                                                                             data-bs-toggle="dropdown"
                                                                                             aria-haspopup="true"
                                                                                             aria-expanded="false"> <i
                                                                                class="ri-more-2-fill"></i> </a>
                                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                                class="dropdown-item" href="#"><i
                                                                                    class="ri-pencil-line text-muted me-2 align-bottom"></i>Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-forbid-2-line text-muted me-2 align-bottom"></i>Block</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-delete-bin-6-line text-muted me-2 align-bottom"></i>Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 298px; height: 1442px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                 style="height: 254px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="groups" role="tabpanel">
                </div>
            </div>
            <!-- end tab contact -->
        </div>
        <!-- end chat leftsidebar -->
        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden border">

            <div class="chat-content d-lg-flex">
                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <!-- conversation user -->
                    <div class="position-relative">


                        <div class="position-relative" id="users-chat" style="display: block;">
                            <div class="p-3 user-chat-topbar">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 col-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                                        <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>Online</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-4">
                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon-sm"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </button>
                                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="">
                                                        <div class="p-2">
                                                            <div class="search-box">
                                                                <input type="text" class="form-control bg-light border-light" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                <i class="ri-search-2-line search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item m-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-profile-line align-bottom text-muted me-2"></i> View Profile</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-image-line align-bottom text-muted me-2"></i> Media & File</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- end chat user head -->
                            <div class="chat-conversation p-3 p-lg-4 simplebar-scrollable-y" id="chat-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px;">
                                                    <div id="elmLoader"></div>
                                                    <ul class="list-unstyled chat-conversation-list" id="users-conversation"><li class="chat-list left" id="1">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="1"><p class="mb-0 ctext-content">Good morning 😊</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item reply-message" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                    <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                    <a class="dropdown-item copy-message" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>                    <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                </div>            </div></div><div class="conversation-name"><span class="d-none name">Lisa Parker</span><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list right" id="2">                        <div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="2"><p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item reply-message" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                    <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                    <a class="dropdown-item copy-message" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>                    <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                </div>            </div></div><div class="conversation-name"><span class="d-none name">Frank Thomas</span><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list left" id="3">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="3"><p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item reply-message" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                    <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                    <a class="dropdown-item copy-message" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>                    <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                </div>            </div></div><div class="ctext-wrap"><div class="ctext-wrap-content" id="4"><p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item reply-message" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                    <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                    <a class="dropdown-item copy-message" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>                    <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                </div>            </div></div><div class="conversation-name"><span class="d-none name">Lisa Parker</span><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list right" id="5">                        <div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="5"><p class="mb-0 ctext-content">Wow that's great</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item reply-message" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                    <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                    <a class="dropdown-item copy-message" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>                    <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                </div>            </div></div><div class="conversation-name"><span class="d-none name">Frank Thomas</span><small class="text-muted time">09:30 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list left" id="6">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="message-img mb-0"><div class="message-img-list">                <div>                    <a class="popup-img d-inline-block" href="{{ asset('assets/images/small/img-1.jpg') }}">                        <img src="{{ asset('assets/images/small/img-1.jpg') }}" alt="" class="rounded border">                    </a>                </div>                <div class="message-img-link">                <ul class="list-inline mb-0">                    <li class="list-inline-item dropdown">                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            <i class="ri-more-fill"></i>                        </a>                        <div class="dropdown-menu">                            <a class="dropdown-item" href="assets/images/small/img-1.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                            <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                            <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                            <a class="dropdown-item delete-image" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                        </div>                    </li>                </ul>                </div>            </div><div class="message-img-list">                <div>                    <a class="popup-img d-inline-block" href="{{ asset('assets/images/small/img-2.jpg') }}">                        <img src="{{ asset('assets/images/small/img-2.jpg') }}" alt="" class="rounded border">                    </a>                </div>                <div class="message-img-link">                <ul class="list-inline mb-0">                    <li class="list-inline-item dropdown">                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            <i class="ri-more-fill"></i>                        </a>                        <div class="dropdown-menu">                            <a class="dropdown-item" href="{{ asset('assets/images/small/img-2.jpg') }}" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>                            <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>                            <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>                            <a class="dropdown-item delete-image" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>                        </div>                    </li>                </ul>                </div>            </div></div></div><div class="conversation-name"><span class="d-none name">Lisa Parker</span><small class="text-muted time">10:15 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li></ul>
                                                    <!-- end chat-conversation-list -->
                                                </div></div></div></div><div class="simplebar-placeholder" style="width: 1339px; height: 637px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 587px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert">
                                Message copied
                            </div>
                        </div>


                        <div class="chat-input-section p-3 p-lg-4">

                            <form id="chatinput-form" enctype="multipart/form-data">
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="chat-input-links me-2">
                                            <div class="links-list-item">
                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                    <i class="bx bx-smile align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input type="text" class="form-control chat-input bg-light border-light fs-13" id="chat-input" placeholder="Type your message..." autocomplete="off">
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ms-2">
                                            <div class="links-list-item">
                                                <button type="submit" class="btn btn-success chat-send waves-effect waves-light fs-13">
                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="replyCard">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="conversation-name"></h5>
                                            <p class="mb-0"></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" id="close_toggle" class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                <i class="bx bx-x align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- glightbox js -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- fgEmojiPicker js -->
    <script src="{{ asset('assets/libs/fg-emoji-picker/fgEmojiPicker.js') }}"></script>

    <!-- chat init js -->
    <script src="{{ asset('assets/js/pages/chat.init.js') }}"></script>
@endsection

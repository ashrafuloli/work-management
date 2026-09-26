@extends('layout.app')

@section('main')

    <div class="wm-project-team-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-project-team-page__header">

            <div class="wm-project-team-page__header-left">

                <nav class="wm-project-team-page__breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Team</span>

                </nav>

                <div class="wm-project-team-page__title-row">

                    <div class="wm-project-team-page__title-icon">
                        <i class="ph ph-users-three"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-team-page__title">
                            Project Team
                        </h1>

                        <p class="wm-project-team-page__subtitle">
                            Manage project members, roles, responsibilities, and access.
                        </p>

                    </div>

                </div>

            </div>

            <div class="wm-project-team-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                    data-header-action="invite"
                >
                    <i class="ph ph-user-plus"></i>
                    Invite Member
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-team-page__navigation">

            <nav class="wm-project-team-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-team-page__nav-item is-active"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-team-page__summary">

            <button
                type="button"
                class="wm-project-team-page__summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-project-team-page__summary-icon wm-project-team-page__summary-icon--blue">
                <i class="ph ph-users-three"></i>
            </span>

                <span class="wm-project-team-page__summary-content">

                <span>Total Members</span>

                <strong>12</strong>

                <small>Project team</small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-team-page__summary-card"
                data-summary-filter="active"
            >

            <span class="wm-project-team-page__summary-icon wm-project-team-page__summary-icon--green">
                <i class="ph ph-user-circle-check"></i>
            </span>

                <span class="wm-project-team-page__summary-content">

                <span>Active Members</span>

                <strong>10</strong>

                <small>Currently active</small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-team-page__summary-card"
                data-summary-filter="pending"
            >

            <span class="wm-project-team-page__summary-icon wm-project-team-page__summary-icon--yellow">
                <i class="ph ph-user-circle-plus"></i>
            </span>

                <span class="wm-project-team-page__summary-content">

                <span>Pending Invites</span>

                <strong>2</strong>

                <small>Awaiting response</small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-team-page__summary-card"
                data-summary-filter="managers"
            >

            <span class="wm-project-team-page__summary-icon wm-project-team-page__summary-icon--purple">
                <i class="ph ph-user-gear"></i>
            </span>

                <span class="wm-project-team-page__summary-content">

                <span>Project Managers</span>

                <strong>2</strong>

                <small>Managing this project</small>

            </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-team-page__toolbar">

            <div class="wm-project-team-page__toolbar-left">

                <div class="wm-project-team-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectTeamSearch"
                        placeholder="Search members..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-team-page__search-clear"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-team-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-team-page__toolbar-right">

                <div class="wm-project-team-page__sort">

                    <button
                        type="button"
                        class="wm-project-team-page__toolbar-button"
                        data-sort-toggle
                    >
                        <i class="ph ph-sort-ascending"></i>
                        Sort
                        <i class="ph ph-caret-down"></i>
                    </button>

                    <div
                        class="wm-project-team-page__sort-menu"
                        data-sort-menu
                    >

                        <button type="button" data-sort="name">
                            <i class="ph ph-text-aa"></i>
                            Name
                        </button>

                        <button type="button" data-sort="role">
                            <i class="ph ph-user"></i>
                            Role
                        </button>

                        <button type="button" data-sort="tasks">
                            <i class="ph ph-check-square"></i>
                            Tasks
                        </button>

                        <button type="button" data-sort="active">
                            <i class="ph ph-clock"></i>
                            Last Active
                        </button>

                    </div>

                </div>


                <div class="wm-project-team-page__view-switcher">

                    <button
                        type="button"
                        class="is-active"
                        data-view="list"
                        aria-label="List view"
                    >
                        <i class="ph ph-list"></i>
                    </button>

                    <button
                        type="button"
                        data-view="grid"
                        aria-label="Grid view"
                    >
                        <i class="ph ph-squares-four"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-project-team-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-team-page__filter-field">

                <label for="teamRoleFilter">
                    Role
                </label>

                <select id="teamRoleFilter">

                    <option value="">All Roles</option>
                    <option value="pi">Principal Investigator</option>
                    <option value="manager">Project Manager</option>
                    <option value="researcher">Researcher</option>
                    <option value="postdoc">Postdoc</option>
                    <option value="student">Graduate Student</option>
                    <option value="collaborator">Collaborator</option>

                </select>

            </div>


            <div class="wm-project-team-page__filter-field">

                <label for="teamStatusFilter">
                    Status
                </label>

                <select id="teamStatusFilter">

                    <option value="">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="pending">Pending</option>
                    <option value="inactive">Inactive</option>

                </select>

            </div>


            <div class="wm-project-team-page__filter-field">

                <label for="teamWorkstreamFilter">
                    Workstream
                </label>

                <select id="teamWorkstreamFilter">

                    <option value="">All Workstreams</option>
                    <option value="planning">Research Planning</option>
                    <option value="field">Field Data Collection</option>
                    <option value="analysis">Data Analysis</option>
                    <option value="stakeholder">Stakeholder Engagement</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-team-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-team-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            Bulk Actions
        ========================================================== --}}
        <div
            class="wm-project-team-page__bulk-bar"
            data-bulk-bar
        >

            <div class="wm-project-team-page__bulk-left">

                <button
                    type="button"
                    class="wm-project-team-page__bulk-close"
                    data-clear-selection
                >
                    <i class="ph ph-x"></i>
                </button>

                <strong>
                    <span data-selected-count>0</span>
                    selected
                </strong>

            </div>


            <div class="wm-project-team-page__bulk-actions">

                <button type="button" data-bulk-action="message">
                    <i class="ph ph-chat-circle"></i>
                    Message
                </button>

                <button type="button" data-bulk-action="assign">
                    <i class="ph ph-user-plus"></i>
                    Assign Workstream
                </button>

                <button type="button" data-bulk-action="export">
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="is-danger"
                    data-bulk-action="remove"
                >
                    <i class="ph ph-user-minus"></i>
                    Remove
                </button>

            </div>

        </div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-project-team-page__list-view is-visible"
            data-list-view
        >

            <div class="wm-project-team-page__table-card">

                <div class="wm-project-team-page__table-wrap">

                    <table class="wm-project-team-page__table">

                        <thead>

                        <tr>

                            <th class="wm-project-team-page__check-column">

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        id="selectAllMembers"
                                    >

                                    <span></span>

                                </label>

                            </th>

                            <th>Member</th>
                            <th>Role</th>
                            <th>Workstreams</th>
                            <th>Tasks</th>
                            <th>Last Active</th>
                            <th>Status</th>
                            <th></th>

                        </tr>

                        </thead>


                        <tbody data-member-list>


                        {{-- Sarah --}}
                        <tr
                            data-member-item
                            data-name="Sarah Wilson"
                            data-role="pi"
                            data-status="active"
                            data-workstream="planning"
                            data-tasks="18"
                            data-active="2026-09-24"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="sarah"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--blue">
                                        SW
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            Dr. Sarah Wilson
                                        </strong>

                                        <span>
                                            sarah.wilson@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Principal Investigator
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Research Planning</span>
                                    <span>Data Analysis</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    18
                                </strong>

                                <small>12 done</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Today, 10:24 AM
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-active">
                                    <i></i>
                                    Active
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-user-gear"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Remove
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Michael --}}
                        <tr
                            data-member-item
                            data-name="Michael Johnson"
                            data-role="manager"
                            data-status="active"
                            data-workstream="field"
                            data-tasks="24"
                            data-active="2026-09-24"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="michael"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--green">
                                        MJ
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            Michael Johnson
                                        </strong>

                                        <span>
                                            michael.johnson@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Project Manager
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Field Data Collection</span>
                                    <span>Stakeholder Engagement</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    24
                                </strong>

                                <small>18 done</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Today, 9:48 AM
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-active">
                                    <i></i>
                                    Active
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-user-gear"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Remove
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Anna --}}
                        <tr
                            data-member-item
                            data-name="Anna Kim"
                            data-role="researcher"
                            data-status="active"
                            data-workstream="analysis"
                            data-tasks="16"
                            data-active="2026-09-23"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="anna"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--purple">
                                        AK
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            Anna Kim
                                        </strong>

                                        <span>
                                            anna.kim@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Researcher
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Data Analysis</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    16
                                </strong>

                                <small>11 done</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Yesterday, 4:12 PM
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-active">
                                    <i></i>
                                    Active
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-user-gear"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Remove
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Robert --}}
                        <tr
                            data-member-item
                            data-name="Robert Brown"
                            data-role="postdoc"
                            data-status="active"
                            data-workstream="field"
                            data-tasks="13"
                            data-active="2026-09-22"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="robert"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--orange">
                                        RB
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            Robert Brown
                                        </strong>

                                        <span>
                                            robert.brown@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Postdoc
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Field Data Collection</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    13
                                </strong>

                                <small>9 done</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Sep 22, 2026
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-active">
                                    <i></i>
                                    Active
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-user-gear"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Remove
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- James --}}
                        <tr
                            data-member-item
                            data-name="James Miller"
                            data-role="student"
                            data-status="active"
                            data-workstream="analysis"
                            data-tasks="9"
                            data-active="2026-09-21"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="james"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--cyan">
                                        JM
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            James Miller
                                        </strong>

                                        <span>
                                            james.miller@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Graduate Student
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Data Analysis</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    9
                                </strong>

                                <small>6 done</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Sep 21, 2026
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-active">
                                    <i></i>
                                    Active
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-user-gear"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Remove
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Emily Pending --}}
                        <tr
                            data-member-item
                            data-name="Emily Davis"
                            data-role="collaborator"
                            data-status="pending"
                            data-workstream="stakeholder"
                            data-tasks="0"
                            data-active="2026-09-20"
                        >

                            <td>

                                <label class="wm-project-team-page__checkbox">

                                    <input
                                        type="checkbox"
                                        class="member-checkbox"
                                        value="emily"
                                    >

                                    <span></span>

                                </label>

                            </td>

                            <td>

                                <div class="wm-project-team-page__member">

                                    <span class="wm-project-team-page__avatar wm-project-team-page__avatar--pink">
                                        ED
                                    </span>

                                    <div class="wm-project-team-page__member-info">

                                        <strong>
                                            Emily Davis
                                        </strong>

                                        <span>
                                            emily.davis@example.com
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-team-page__role">
                                    Collaborator
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__workstreams">

                                    <span>Stakeholder Engagement</span>

                                </div>

                            </td>

                            <td>

                                <strong class="wm-project-team-page__task-count">
                                    0
                                </strong>

                                <small>Not started</small>

                            </td>

                            <td>
                                <span class="wm-project-team-page__date">
                                    Invitation sent
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-team-page__status is-pending">
                                    <i></i>
                                    Pending
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-team-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-team-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-member-action="profile">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="resend">
                                            <i class="ph ph-paper-plane-tilt"></i>
                                            Resend Invite
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-member-action="remove"
                                        >
                                            <i class="ph ph-user-minus"></i>
                                            Cancel Invite
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Grid View
        ========================================================== --}}
        <div
            class="wm-project-team-page__grid-view"
            data-grid-view
        >

            <div class="wm-project-team-page__grid">


                {{-- Sarah --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="Sarah Wilson"
                    data-role="pi"
                    data-status="active"
                    data-workstream="planning"
                    data-tasks="18"
                    data-active="2026-09-24"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--blue">
                        SW
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>Dr. Sarah Wilson</h3>

                        <p>
                            Principal Investigator
                        </p>

                        <span>
                        sarah.wilson@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>18</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>2</strong>
                            <span>Workstreams</span>
                        </div>

                        <div>
                            <strong>12</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-active">
                        <i></i>
                        Active
                    </span>

                        <small>
                            Active today
                        </small>

                    </div>

                </article>


                {{-- Michael --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="Michael Johnson"
                    data-role="manager"
                    data-status="active"
                    data-workstream="field"
                    data-tasks="24"
                    data-active="2026-09-24"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--green">
                        MJ
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>Michael Johnson</h3>

                        <p>
                            Project Manager
                        </p>

                        <span>
                        michael.johnson@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>24</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>2</strong>
                            <span>Workstreams</span>
                        </div>

                        <div>
                            <strong>18</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-active">
                        <i></i>
                        Active
                    </span>

                        <small>
                            Active today
                        </small>

                    </div>

                </article>


                {{-- Anna --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="Anna Kim"
                    data-role="researcher"
                    data-status="active"
                    data-workstream="analysis"
                    data-tasks="16"
                    data-active="2026-09-23"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--purple">
                        AK
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>Anna Kim</h3>

                        <p>
                            Researcher
                        </p>

                        <span>
                        anna.kim@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>16</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>1</strong>
                            <span>Workstream</span>
                        </div>

                        <div>
                            <strong>11</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-active">
                        <i></i>
                        Active
                    </span>

                        <small>
                            Active yesterday
                        </small>

                    </div>

                </article>


                {{-- Robert --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="Robert Brown"
                    data-role="postdoc"
                    data-status="active"
                    data-workstream="field"
                    data-tasks="13"
                    data-active="2026-09-22"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--orange">
                        RB
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>Robert Brown</h3>

                        <p>
                            Postdoc
                        </p>

                        <span>
                        robert.brown@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>13</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>1</strong>
                            <span>Workstream</span>
                        </div>

                        <div>
                            <strong>9</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-active">
                        <i></i>
                        Active
                    </span>

                        <small>
                            Active Sep 22
                        </small>

                    </div>

                </article>


                {{-- James --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="James Miller"
                    data-role="student"
                    data-status="active"
                    data-workstream="analysis"
                    data-tasks="9"
                    data-active="2026-09-21"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--cyan">
                        JM
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>James Miller</h3>

                        <p>
                            Graduate Student
                        </p>

                        <span>
                        james.miller@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>9</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>1</strong>
                            <span>Workstream</span>
                        </div>

                        <div>
                            <strong>6</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-active">
                        <i></i>
                        Active
                    </span>

                        <small>
                            Active Sep 21
                        </small>

                    </div>

                </article>


                {{-- Emily --}}
                <article
                    class="wm-project-team-page__member-card"
                    data-grid-item
                    data-name="Emily Davis"
                    data-role="collaborator"
                    data-status="pending"
                    data-workstream="stakeholder"
                    data-tasks="0"
                    data-active="2026-09-20"
                >

                    <div class="wm-project-team-page__member-card-top">

                    <span class="wm-project-team-page__member-card-avatar wm-project-team-page__avatar--pink">
                        ED
                    </span>

                        <div class="wm-project-team-page__card-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-team-page__action-menu"
                                data-action-menu
                            >

                                <button data-member-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                                <button data-member-action="resend">
                                    <i class="ph ph-paper-plane-tilt"></i>
                                    Resend Invite
                                </button>

                                <button data-member-action="message">
                                    <i class="ph ph-chat-circle"></i>
                                    Message
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-member-action="remove"
                                >
                                    <i class="ph ph-user-minus"></i>
                                    Cancel Invite
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-info">

                        <h3>Emily Davis</h3>

                        <p>
                            Collaborator
                        </p>

                        <span>
                        emily.davis@example.com
                    </span>

                    </div>

                    <div class="wm-project-team-page__member-card-stats">

                        <div>
                            <strong>0</strong>
                            <span>Tasks</span>
                        </div>

                        <div>
                            <strong>1</strong>
                            <span>Workstream</span>
                        </div>

                        <div>
                            <strong>0</strong>
                            <span>Completed</span>
                        </div>

                    </div>

                    <div class="wm-project-team-page__member-card-footer">

                    <span class="wm-project-team-page__status is-pending">
                        <i></i>
                        Pending
                    </span>

                        <small>
                            Invite pending
                        </small>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-team-page__empty"
            data-empty-state
        >

            <div class="wm-project-team-page__empty-icon">
                <i class="ph ph-users-three"></i>
            </div>

            <h3>
                No team members found
            </h3>

            <p>
                Try changing your search or filters, or invite a new member.
            </p>

            <button
                type="button"
                class="btn btn-primary"
                data-header-action="invite"
            >
                <i class="ph ph-user-plus"></i>
                Invite Member
            </button>

        </div>


        {{-- =========================================================
            Footer
        ========================================================== --}}
        <div class="wm-project-team-page__footer">

        <span>
            Showing <strong data-visible-count>6</strong> members
        </span>

            <div class="wm-project-team-page__pagination">

                <button type="button" disabled>
                    <i class="ph ph-caret-left"></i>
                </button>

                <button
                    type="button"
                    class="is-active"
                >
                    1
                </button>

                <button type="button">
                    2
                </button>

                <button type="button">
                    3
                </button>

                <button type="button">
                    <i class="ph ph-caret-right"></i>
                </button>

            </div>

        </div>


        {{-- =========================================================
            Invite Member Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-team-page__modal"
            id="inviteMemberModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Invite Team Member
                            </h5>

                            <p>
                                Add a researcher or collaborator to this project.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <form id="inviteMemberForm">

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label class="form-label">
                                        First Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="first_name"
                                        class="form-control"
                                        placeholder="e.g. John"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Last Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="last_name"
                                        class="form-control"
                                        placeholder="e.g. Smith"
                                        required
                                    >

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Email Address
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="john.smith@example.com"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Project Role
                                        <span>*</span>
                                    </label>

                                    <select
                                        name="role"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            Select role
                                        </option>

                                        <option value="manager">
                                            Project Manager
                                        </option>

                                        <option value="researcher">
                                            Researcher
                                        </option>

                                        <option value="postdoc">
                                            Postdoc
                                        </option>

                                        <option value="student">
                                            Graduate Student
                                        </option>

                                        <option value="collaborator">
                                            Collaborator
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Workstream
                                    </label>

                                    <select
                                        name="workstream"
                                        class="form-select"
                                    >

                                        <option value="">
                                            Select workstream
                                        </option>

                                        <option value="planning">
                                            Research Planning
                                        </option>

                                        <option value="field">
                                            Field Data Collection
                                        </option>

                                        <option value="analysis">
                                            Data Analysis
                                        </option>

                                        <option value="stakeholder">
                                            Stakeholder Engagement
                                        </option>

                                    </select>

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Personal Message
                                    </label>

                                    <textarea
                                        name="message"
                                        class="form-control"
                                        rows="4"
                                        placeholder="Add a short message to the invitation..."
                                    ></textarea>

                                </div>

                            </div>

                        </form>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-send-invite
                        >
                            <i class="ph ph-paper-plane-tilt"></i>
                            Send Invitation
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Change Role Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-team-page__modal"
            id="changeRoleModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Change Member Role
                            </h5>

                            <p data-role-member-name>
                                Update project permissions and responsibilities.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <label class="form-label">
                            Project Role
                        </label>

                        <select
                            class="form-select"
                            id="changeMemberRole"
                        >

                            <option value="manager">
                                Project Manager
                            </option>

                            <option value="researcher">
                                Researcher
                            </option>

                            <option value="postdoc">
                                Postdoc
                            </option>

                            <option value="student">
                                Graduate Student
                            </option>

                            <option value="collaborator">
                                Collaborator
                            </option>

                        </select>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-save-role
                        >
                            Save Role
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('script')
    <script>

        $(document).ready(function () {

            'use strict';


            // ---------------------------------------------------------
            // Elements
            // ---------------------------------------------------------

            const $search =
                $('#projectTeamSearch');

            const $filterPanel =
                $('[data-filter-panel]');

            const $sortMenu =
                $('[data-sort-menu]');

            const $bulkBar =
                $('[data-bulk-bar]');

            const $activeFilters =
                $('[data-active-filters]');

            const $emptyState =
                $('[data-empty-state]');


            // ---------------------------------------------------------
            // Labels
            // ---------------------------------------------------------

            const roleLabels = {

                pi: 'Principal Investigator',

                manager: 'Project Manager',

                researcher: 'Researcher',

                postdoc: 'Postdoc',

                student: 'Graduate Student',

                collaborator: 'Collaborator'

            };


            const statusLabels = {

                active: 'Active',

                pending: 'Pending',

                inactive: 'Inactive'

            };


            const workstreamLabels = {

                planning: 'Research Planning',

                field: 'Field Data Collection',

                analysis: 'Data Analysis',

                stakeholder: 'Stakeholder Engagement'

            };


            // ---------------------------------------------------------
            // Notice
            // ---------------------------------------------------------

            function showNotice(
                title,
                text,
                icon
            ) {

                if (
                    typeof Swal !== 'undefined'
                ) {

                    Swal.fire({

                        title: title,

                        text: text,

                        icon: icon || 'info',

                        confirmButtonColor: '#2563EB'

                    });

                    return;

                }

                alert(
                    title +
                    '\n\n' +
                    text
                );

            }


            // ---------------------------------------------------------
            // Modal
            // ---------------------------------------------------------

            function openModal(id) {

                const element =
                    document.getElementById(id);


                if (
                    element &&
                    typeof bootstrap !== 'undefined'
                ) {

                    bootstrap.Modal
                        .getOrCreateInstance(element)
                        .show();

                }

            }


            // ---------------------------------------------------------
            // Filters
            // ---------------------------------------------------------

            function getFilters() {

                return {

                    role:
                        $('#teamRoleFilter').val(),

                    status:
                        $('#teamStatusFilter').val(),

                    workstream:
                        $('#teamWorkstreamFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };

            }


            function updateFilterCount() {

                const filters =
                    getFilters();

                let count = 0;


                if (filters.role) {
                    count++;
                }


                if (filters.status) {
                    count++;
                }


                if (filters.workstream) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            function updateActiveFilters() {

                const filters =
                    getFilters();


                $activeFilters.empty();


                if (filters.search) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-team-page__filter-chip"
                        data-remove-search
                    >

                        Search: "${$search.val()}"

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.role) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-team-page__filter-chip"
                        data-remove-filter="role"
                    >

                        ${roleLabels[filters.role]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.status) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-team-page__filter-chip"
                        data-remove-filter="status"
                    >

                        ${statusLabels[filters.status]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.workstream) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-team-page__filter-chip"
                        data-remove-filter="workstream"
                    >

                        ${workstreamLabels[filters.workstream]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }

            }


            // ---------------------------------------------------------
            // Match Member
            // ---------------------------------------------------------

            function matchesMember(
                $item,
                filters
            ) {

                const name =
                    (
                        $item.data('name') || ''
                    )
                        .toString()
                        .toLowerCase();


                const role =
                    $item.data('role');


                const status =
                    $item.data('status');


                const workstream =
                    $item.data('workstream');


                if (
                    filters.role &&
                    role !== filters.role
                ) {

                    return false;

                }


                if (
                    filters.status &&
                    status !== filters.status
                ) {

                    return false;

                }


                if (
                    filters.workstream &&
                    workstream !== filters.workstream
                ) {

                    return false;

                }


                if (
                    filters.search &&
                    name.indexOf(
                        filters.search
                    ) === -1
                ) {

                    return false;

                }


                return true;

            }


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters =
                    getFilters();


                let listCount = 0;

                let gridCount = 0;


                $('[data-member-item]')
                    .each(function () {

                        const $item =
                            $(this);


                        const visible =
                            matchesMember(
                                $item,
                                filters
                            );


                        $item.toggleClass(
                            'is-hidden',
                            !visible
                        );


                        if (visible) {
                            listCount++;
                        }

                    });


                $('[data-grid-item]')
                    .each(function () {

                        const $item =
                            $(this);


                        const visible =
                            matchesMember(
                                $item,
                                filters
                            );


                        $item.toggleClass(
                            'is-hidden',
                            !visible
                        );


                        if (visible) {
                            gridCount++;
                        }

                    });


                const visibleCount =
                    Math.max(
                        listCount,
                        gridCount
                    );


                $('[data-visible-count]')
                    .text(visibleCount);


                $emptyState.toggleClass(
                    'is-visible',
                    visibleCount === 0
                );


                updateFilterCount();

                updateActiveFilters();

            }


            // ---------------------------------------------------------
            // Search
            // ---------------------------------------------------------

            $search.on(
                'input',
                function () {

                    const hasValue =
                        $(this).val().length > 0;


                    $('[data-search-clear]')
                        .toggleClass(
                            'is-visible',
                            hasValue
                        );


                    applyFilters();

                }
            );


            $(document).on(
                'click',
                '[data-search-clear]',
                function () {

                    $search
                        .val('')
                        .trigger('input');

                }
            );


            $(document).on(
                'click',
                '[data-remove-search]',
                function () {

                    $search
                        .val('')
                        .trigger('input');

                }
            );


            // ---------------------------------------------------------
            // Filter Toggle
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-filter-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel
                        .toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Filter Changes
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#teamRoleFilter, #teamStatusFilter, #teamWorkstreamFilter',
                function () {

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Remove Individual Filter
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data(
                            'remove-filter'
                        );


                    if (
                        filter === 'role'
                    ) {

                        $('#teamRoleFilter')
                            .val('');

                    }


                    if (
                        filter === 'status'
                    ) {

                        $('#teamStatusFilter')
                            .val('');

                    }


                    if (
                        filter === 'workstream'
                    ) {

                        $('#teamWorkstreamFilter')
                            .val('');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Clear Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $('#teamRoleFilter')
                        .val('');

                    $('#teamStatusFilter')
                        .val('');

                    $('#teamWorkstreamFilter')
                        .val('');

                    $search.val('');

                    $('[data-search-clear]')
                        .removeClass(
                            'is-visible'
                        );


                    $('[data-summary-filter]')
                        .removeClass(
                            'is-active'
                        );

                    $('[data-summary-filter="all"]')
                        .addClass(
                            'is-active'
                        );


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Summary Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const filter =
                        $(this).data(
                            'summary-filter'
                        );


                    $('[data-summary-filter]')
                        .removeClass(
                            'is-active'
                        );


                    $(this)
                        .addClass(
                            'is-active'
                        );


                    $('#teamRoleFilter')
                        .val('');

                    $('#teamStatusFilter')
                        .val('');

                    $('#teamWorkstreamFilter')
                        .val('');


                    if (
                        filter === 'active'
                    ) {

                        $('#teamStatusFilter')
                            .val('active');

                    }


                    if (
                        filter === 'pending'
                    ) {

                        $('#teamStatusFilter')
                            .val('pending');

                    }


                    if (
                        filter === 'managers'
                    ) {

                        $('#teamRoleFilter')
                            .val('manager');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View Switch
            // ---------------------------------------------------------

            function switchView(view) {

                $('[data-view]')
                    .removeClass(
                        'is-active'
                    );


                $('[data-view="' + view + '"]')
                    .addClass(
                        'is-active'
                    );


                $('[data-list-view]')
                    .removeClass(
                        'is-visible'
                    );


                $('[data-grid-view]')
                    .removeClass(
                        'is-visible'
                    );


                if (
                    view === 'list'
                ) {

                    $('[data-list-view]')
                        .addClass(
                            'is-visible'
                        );

                }


                if (
                    view === 'grid'
                ) {

                    $('[data-grid-view]')
                        .addClass(
                            'is-visible'
                        );

                }

            }


            $(document).on(
                'click',
                '[data-view]',
                function () {

                    switchView(
                        $(this).data('view')
                    );

                }
            );


            // ---------------------------------------------------------
            // Sort Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $sortMenu
                        .toggleClass(
                            'is-open'
                        );

                }
            );


            function sortMembers(type) {

                const $list =
                    $('[data-member-list]');


                const rows =
                    $list
                        .find('[data-member-item]')
                        .get();


                rows.sort(
                    function (a, b) {

                        const $a =
                            $(a);

                        const $b =
                            $(b);


                        if (
                            type === 'name'
                        ) {

                            return (
                                $a.data('name') || ''
                            )
                                .localeCompare(
                                    $b.data('name') || ''
                                );

                        }


                        if (
                            type === 'role'
                        ) {

                            return (
                                $a.data('role') || ''
                            )
                                .localeCompare(
                                    $b.data('role') || ''
                                );

                        }


                        if (
                            type === 'tasks'
                        ) {

                            return (
                                Number(
                                    $b.data('tasks')
                                ) -
                                Number(
                                    $a.data('tasks')
                                )
                            );

                        }


                        if (
                            type === 'active'
                        ) {

                            return (
                                new Date(
                                    $b.data('active')
                                ) -
                                new Date(
                                    $a.data('active')
                                )
                            );

                        }


                        return 0;

                    }
                );


                $.each(
                    rows,
                    function (_, row) {

                        $list.append(row);

                    }
                );


                $sortMenu
                    .removeClass(
                        'is-open'
                    );

            }


            $(document).on(
                'click',
                '[data-sort]',
                function () {

                    sortMembers(
                        $(this).data('sort')
                    );

                }
            );


            // ---------------------------------------------------------
            // Selection
            // ---------------------------------------------------------

            function updateSelection() {

                const $checkboxes =
                    $('.member-checkbox');


                const checkedCount =
                    $checkboxes
                        .filter(':checked')
                        .length;


                const totalCount =
                    $checkboxes.length;


                $('[data-selected-count]')
                    .text(
                        checkedCount
                    );


                $bulkBar.toggleClass(
                    'is-visible',
                    checkedCount > 0
                );


                $('#selectAllMembers')
                    .prop(
                        'checked',
                        totalCount > 0 &&
                        checkedCount === totalCount
                    );


                $('#selectAllMembers')
                    .prop(
                        'indeterminate',
                        checkedCount > 0 &&
                        checkedCount < totalCount
                    );


                $checkboxes.each(
                    function () {

                        $(this)
                            .closest('tr')
                            .toggleClass(
                                'is-selected',
                                $(this).is(':checked')
                            );

                    }
                );

            }


            $(document).on(
                'change',
                '.member-checkbox',
                function () {

                    updateSelection();

                }
            );


            $('#selectAllMembers').on(
                'change',
                function () {

                    $('.member-checkbox')
                        .prop(
                            'checked',
                            $(this).is(':checked')
                        );


                    updateSelection();

                }
            );


            $(document).on(
                'click',
                '[data-clear-selection]',
                function () {

                    $('.member-checkbox')
                        .prop(
                            'checked',
                            false
                        );


                    $('#selectAllMembers')
                        .prop(
                            'checked',
                            false
                        )
                        .prop(
                            'indeterminate',
                            false
                        );


                    updateSelection();

                }
            );


            // ---------------------------------------------------------
            // Bulk Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-bulk-action]',
                function () {

                    const action =
                        $(this).data(
                            'bulk-action'
                        );


                    const count =
                        $('.member-checkbox:checked')
                            .length;


                    if (!count) {
                        return;
                    }


                    if (
                        action === 'remove'
                    ) {

                        if (
                            typeof Swal !== 'undefined'
                        ) {

                            Swal.fire({

                                title:
                                    'Remove selected members?',

                                text:
                                    `${count} member(s) will lose access to this project.`,

                                icon:
                                    'warning',

                                showCancelButton:
                                    true,

                                confirmButtonColor:
                                    '#EF4444',

                                cancelButtonColor:
                                    '#6B7280',

                                confirmButtonText:
                                    'Remove'

                            }).then(
                                function (result) {

                                    if (
                                        result.isConfirmed
                                    ) {

                                        showNotice(
                                            'Members removed',
                                            `${count} member(s) have been removed.`,
                                            'success'
                                        );

                                        $('[data-clear-selection]')
                                            .trigger('click');

                                    }

                                }
                            );

                        }

                        return;

                    }


                    showNotice(
                        action
                            .charAt(0)
                            .toUpperCase() +
                        action.slice(1),
                        `${count} member(s) selected for ${action}.`
                    );

                }
            );


            // ---------------------------------------------------------
            // Action Menus
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-action-menu-toggle]',
                function (event) {

                    event.stopPropagation();


                    const $menu =
                        $(this)
                            .siblings(
                                '[data-action-menu]'
                            );


                    $('[data-action-menu]')
                        .not($menu)
                        .removeClass(
                            'is-open'
                        );


                    $menu.toggleClass(
                        'is-open'
                    );

                }
            );


            // ---------------------------------------------------------
            // Member Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-member-action]',
                function () {

                    const action =
                        $(this).data(
                            'member-action'
                        );


                    const $item =
                        $(this)
                            .closest(
                                '[data-member-item], [data-grid-item]'
                            );


                    const name =
                        $item.data('name') ||
                        'Team member';


                    $('[data-action-menu]')
                        .removeClass(
                            'is-open'
                        );


                    if (
                        action === 'role'
                    ) {

                        $('[data-role-member-name]')
                            .text(
                                `Update the role and permissions for ${name}.`
                            );


                        openModal(
                            'changeRoleModal'
                        );

                        return;

                    }


                    if (
                        action === 'remove'
                    ) {

                        if (
                            typeof Swal !== 'undefined'
                        ) {

                            Swal.fire({

                                title:
                                    'Remove team member?',

                                text:
                                    `${name} will lose access to this project.`,

                                icon:
                                    'warning',

                                showCancelButton:
                                    true,

                                confirmButtonColor:
                                    '#EF4444',

                                cancelButtonColor:
                                    '#6B7280',

                                confirmButtonText:
                                    'Remove'

                            }).then(
                                function (result) {

                                    if (
                                        result.isConfirmed
                                    ) {

                                        showNotice(
                                            'Member removed',
                                            `${name} has been removed from the project.`,
                                            'success'
                                        );

                                    }

                                }
                            );

                        }

                        return;

                    }


                    if (
                        action === 'resend'
                    ) {

                        showNotice(
                            'Invitation resent',
                            `A new invitation has been sent to ${name}.`,
                            'success'
                        );

                        return;

                    }


                    if (
                        action === 'profile'
                    ) {

                        showNotice(
                            'Member Profile',
                            `Opening the profile for ${name}.`
                        );

                        return;

                    }


                    if (
                        action === 'edit'
                    ) {

                        showNotice(
                            'Edit Member',
                            `Opening member settings for ${name}.`
                        );

                        return;

                    }


                    if (
                        action === 'message'
                    ) {

                        showNotice(
                            'Message',
                            `Opening a conversation with ${name}.`
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Header Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-header-action]',
                function () {

                    const action =
                        $(this).data(
                            'header-action'
                        );


                    if (
                        action === 'invite'
                    ) {

                        openModal(
                            'inviteMemberModal'
                        );

                        return;

                    }


                    if (
                        action === 'export'
                    ) {

                        showNotice(
                            'Export Team',
                            'The project team export is ready to connect.'
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Send Invite
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-send-invite]',
                function () {

                    const $form =
                        $('#inviteMemberForm');


                    if (
                        !$form[0].checkValidity()
                    ) {

                        $form[0].reportValidity();

                        return;

                    }


                    const firstName =
                        $form
                            .find('[name="first_name"]')
                            .val();


                    const lastName =
                        $form
                            .find('[name="last_name"]')
                            .val();


                    const email =
                        $form
                            .find('[name="email"]')
                            .val();


                    const role =
                        $form
                            .find('[name="role"]')
                            .val();


                    console.log(
                        'Invite member:',
                        {
                            first_name: firstName,
                            last_name: lastName,
                            email: email,
                            role: role
                        }
                    );


                    const modalElement =
                        document.getElementById(
                            'inviteMemberModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(
                                modalElement
                            )
                            .hide();

                    }


                    $form[0].reset();


                    showNotice(
                        'Invitation sent',
                        `An invitation has been sent to ${email}.`,
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Save Role
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-role]',
                function () {

                    const role =
                        $('#changeMemberRole')
                            .val();


                    const roleName =
                        roleLabels[role] ||
                        role;


                    const modalElement =
                        document.getElementById(
                            'changeRoleModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(
                                modalElement
                            )
                            .hide();

                    }


                    showNotice(
                        'Role updated',
                        `The member role has been changed to ${roleName}.`,
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Outside Click
            // ---------------------------------------------------------

            $(document).on(
                'click',
                function () {

                    $filterPanel
                        .removeClass(
                            'is-open'
                        );


                    $sortMenu
                        .removeClass(
                            'is-open'
                        );


                    $('[data-action-menu]')
                        .removeClass(
                            'is-open'
                        );

                }
            );


            $filterPanel.on(
                'click',
                function (event) {

                    event.stopPropagation();

                }
            );


            $sortMenu.on(
                'click',
                function (event) {

                    event.stopPropagation();

                }
            );


            $(document).on(
                'click',
                '[data-action-menu]',
                function (event) {

                    event.stopPropagation();

                }
            );


            // ---------------------------------------------------------
            // Escape
            // ---------------------------------------------------------

            $(document).on(
                'keydown',
                function (event) {

                    if (
                        event.key === 'Escape'
                    ) {

                        $filterPanel
                            .removeClass(
                                'is-open'
                            );


                        $sortMenu
                            .removeClass(
                                'is-open'
                            );


                        $('[data-action-menu]')
                            .removeClass(
                                'is-open'
                            );

                    }

                }
            );


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            switchView('list');

            applyFilters();

            updateSelection();

        });

    </script>
@endpush

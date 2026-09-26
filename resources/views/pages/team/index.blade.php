@extends('layout.app')

@section('main')

    <div class="wm-team-page">

        {{-- ============================================================
            Page Header
        ============================================================= --}}
        <div class="wm-team-page__header">

            <div class="wm-team-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-team-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span class="wm-team-page__breadcrumb-current">
                Team
            </span>

            </div>


            <div class="wm-team-page__title-row">

                <div>
                    <h1 class="wm-team-page__title">
                        Team
                    </h1>

                    <p class="wm-team-page__subtitle">
                        Manage your workspace members, roles, and project access.
                    </p>
                </div>


                <div class="wm-team-page__header-actions">

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary"
                        data-team-action="manage-roles"
                    >
                        <i class="ph ph-shield-check"></i>
                        <span>Manage Roles</span>
                    </button>

                    <button
                        type="button"
                        class="wm-btn wm-btn--primary"
                        data-team-action="invite"
                    >
                        <i class="ph ph-user-plus"></i>
                        <span>Invite Member</span>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Summary
        ============================================================= --}}
        <div class="wm-team-page__summary">

            <div class="wm-team-page__summary-card">

                <div class="wm-team-page__summary-icon wm-team-page__summary-icon--blue">
                    <i class="ph ph-users-three"></i>
                </div>

                <div class="wm-team-page__summary-content">

                <span class="wm-team-page__summary-label">
                    Total Members
                </span>

                    <strong class="wm-team-page__summary-value">
                        24
                    </strong>

                    <span class="wm-team-page__summary-meta">
                    Across all projects
                </span>

                </div>

            </div>


            <div class="wm-team-page__summary-card">

                <div class="wm-team-page__summary-icon wm-team-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-team-page__summary-content">

                <span class="wm-team-page__summary-label">
                    Active Members
                </span>

                    <strong class="wm-team-page__summary-value">
                        20
                    </strong>

                    <span class="wm-team-page__summary-meta">
                    Currently active
                </span>

                </div>

            </div>


            <div class="wm-team-page__summary-card">

                <div class="wm-team-page__summary-icon wm-team-page__summary-icon--orange">
                    <i class="ph ph-envelope-simple"></i>
                </div>

                <div class="wm-team-page__summary-content">

                <span class="wm-team-page__summary-label">
                    Pending Invites
                </span>

                    <strong class="wm-team-page__summary-value">
                        3
                    </strong>

                    <span class="wm-team-page__summary-meta">
                    Awaiting response
                </span>

                </div>

            </div>


            <div class="wm-team-page__summary-card">

                <div class="wm-team-page__summary-icon wm-team-page__summary-icon--purple">
                    <i class="ph ph-shield-star"></i>
                </div>

                <div class="wm-team-page__summary-content">

                <span class="wm-team-page__summary-label">
                    Administrators
                </span>

                    <strong class="wm-team-page__summary-value">
                        4
                    </strong>

                    <span class="wm-team-page__summary-meta">
                    Workspace admins
                </span>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Main Card
        ============================================================= --}}
        <div class="wm-team-page__card">

            {{-- Toolbar --}}
            <div class="wm-team-page__toolbar">

                <div class="wm-team-page__toolbar-left">

                    <div class="wm-team-page__search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wm-team-search"
                            class="wm-team-page__search-input"
                            placeholder="Search team members..."
                            autocomplete="off"
                        >

                        <button
                            type="button"
                            class="wm-team-page__search-clear"
                            id="wm-team-search-clear"
                            aria-label="Clear search"
                        >
                            <i class="ph ph-x"></i>
                        </button>

                    </div>


                    <button
                        type="button"
                        class="wm-team-page__filter-toggle"
                        id="wm-team-filter-toggle"
                    >
                        <i class="ph ph-funnel"></i>

                        <span>
                        Filters
                    </span>

                        <span
                            class="wm-team-page__filter-count"
                            id="wm-team-filter-count"
                        >
                        0
                    </span>

                    </button>

                </div>


                <div class="wm-team-page__toolbar-right">

                    <div class="wm-team-page__sort">

                    <span class="wm-team-page__sort-label">
                        Sort:
                    </span>

                        <select
                            id="wm-team-sort"
                            class="wm-team-page__sort-select"
                        >
                            <option value="name-asc">
                                Name A-Z
                            </option>

                            <option value="name-desc">
                                Name Z-A
                            </option>

                            <option value="recent">
                                Recently active
                            </option>

                            <option value="projects">
                                Most projects
                            </option>

                        </select>

                    </div>


                    <div class="wm-team-page__view-switcher">

                        <button
                            type="button"
                            class="wm-team-page__view-btn is-active"
                            data-team-view="list"
                            aria-label="List view"
                        >
                            <i class="ph ph-list"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-team-page__view-btn"
                            data-team-view="grid"
                            aria-label="Grid view"
                        >
                            <i class="ph ph-squares-four"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Filters --}}
            <div
                class="wm-team-page__filters"
                id="wm-team-filters"
            >

                <div class="wm-team-page__filter-group">

                    <label for="wm-team-role">
                        Role
                    </label>

                    <select id="wm-team-role">

                        <option value="all">
                            All roles
                        </option>

                        <option value="admin">
                            Admin
                        </option>

                        <option value="pi">
                            Principal Investigator
                        </option>

                        <option value="manager">
                            Project Manager
                        </option>

                        <option value="researcher">
                            Researcher
                        </option>

                        <option value="student">
                            Graduate Student
                        </option>

                        <option value="collaborator">
                            Collaborator
                        </option>

                    </select>

                </div>


                <div class="wm-team-page__filter-group">

                    <label for="wm-team-status">
                        Status
                    </label>

                    <select id="wm-team-status">

                        <option value="all">
                            All statuses
                        </option>

                        <option value="active">
                            Active
                        </option>

                        <option value="pending">
                            Pending
                        </option>

                        <option value="inactive">
                            Inactive
                        </option>

                    </select>

                </div>


                <div class="wm-team-page__filter-group">

                    <label for="wm-team-project">
                        Project
                    </label>

                    <select id="wm-team-project">

                        <option value="all">
                            All projects
                        </option>

                        <option value="atlas">
                            Atlas Research
                        </option>

                        <option value="neuro">
                            Neuro Imaging
                        </option>

                        <option value="climate">
                            Climate Study
                        </option>

                        <option value="genome">
                            Genome Project
                        </option>

                    </select>

                </div>


                <button
                    type="button"
                    class="wm-team-page__clear-filters"
                    id="wm-team-clear-filters"
                >
                    Clear filters
                </button>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-team-page__active-filters"
                id="wm-team-active-filters"
            ></div>


            {{-- ========================================================
                List View
            ========================================================= --}}
            <div
                class="wm-team-page__list-view"
                id="wm-team-list-view"
            >

                <div class="wm-team-page__table-wrap">

                    <table class="wm-team-page__table">

                        <thead>

                        <tr>

                            <th class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        id="wm-team-select-all"
                                    >

                                    <span></span>

                                </label>

                            </th>

                            <th>
                                Member
                            </th>

                            <th>
                                Role
                            </th>

                            <th>
                                Projects
                            </th>

                            <th>
                                Tasks
                            </th>

                            <th>
                                Last Active
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="wm-team-page__action-column"></th>

                        </tr>

                        </thead>


                        <tbody id="wm-team-table-body">


                        {{-- Member 01 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="olivia martin"
                            data-role="admin"
                            data-status="active"
                            data-project="atlas"
                            data-project-count="6"
                            data-last-active="2026-09-24"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--blue">
                                        OM
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'olivia') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Olivia Martin
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            olivia@researchlab.com
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="wm-team-page__role">
                                    Admin
                                </span>

                            </td>


                            <td>

                                <span class="wm-team-page__stat">
                                    6 projects
                                </span>

                            </td>


                            <td>

                                <span class="wm-team-page__stat">
                                    42 tasks
                                </span>

                            </td>


                            <td>

                                <span class="wm-team-page__last-active">
                                    Today, 10:42 AM
                                </span>

                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-shield-check"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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


                        {{-- Member 02 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="sophia chen"
                            data-role="pi"
                            data-status="active"
                            data-project="neuro"
                            data-project-count="5"
                            data-last-active="2026-09-24"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--purple">
                                        SC
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'sophia') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Sophia Chen
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            sophia@researchlab.com
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-team-page__role">
                                    Principal Investigator
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    5 projects
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    31 tasks
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__last-active">
                                    Today, 9:18 AM
                                </span>
                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-shield-check"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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


                        {{-- Member 03 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="ethan brooks"
                            data-role="manager"
                            data-status="active"
                            data-project="climate"
                            data-project-count="4"
                            data-last-active="2026-09-23"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--green">
                                        EB
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'ethan') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Ethan Brooks
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            ethan@researchlab.com
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-team-page__role">
                                    Project Manager
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    4 projects
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    28 tasks
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__last-active">
                                    Yesterday, 4:32 PM
                                </span>
                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-shield-check"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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


                        {{-- Member 04 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="liam carter"
                            data-role="researcher"
                            data-status="active"
                            data-project="genome"
                            data-project-count="3"
                            data-last-active="2026-09-23"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--cyan">
                                        LC
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'liam') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Liam Carter
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            liam@researchlab.com
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-team-page__role">
                                    Researcher
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    3 projects
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    26 tasks
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__last-active">
                                    Yesterday, 2:15 PM
                                </span>
                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-shield-check"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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


                        {{-- Member 05 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="maya wilson"
                            data-role="student"
                            data-status="active"
                            data-project="atlas"
                            data-project-count="2"
                            data-last-active="2026-09-22"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--orange">
                                        MW
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'maya') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Maya Wilson
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            maya@researchlab.com
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-team-page__role">
                                    Graduate Student
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    2 projects
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    18 tasks
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__last-active">
                                    Sep 22, 2026
                                </span>
                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-member-action="role">
                                            <i class="ph ph-shield-check"></i>
                                            Change Role
                                        </button>

                                        <button data-member-action="message">
                                            <i class="ph ph-chat-circle"></i>
                                            Message
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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


                        {{-- Member 06 --}}
                        <tr
                            class="wm-team-page__member-row"
                            data-member
                            data-name="noah parker"
                            data-role="collaborator"
                            data-status="pending"
                            data-project="climate"
                            data-project-count="1"
                            data-last-active="2026-09-10"
                        >

                            <td class="wm-team-page__check-column">

                                <label class="wm-checkbox">

                                    <input
                                        type="checkbox"
                                        class="wm-team-checkbox"
                                    >

                                    <span></span>

                                </label>

                            </td>


                            <td>

                                <div class="wm-team-page__member">

                                    <div class="wm-team-page__avatar wm-team-page__avatar--gray">
                                        NP
                                    </div>

                                    <div class="wm-team-page__member-content">

                                        <a
                                            href="{{ route('team.member', 'noah') }}"
                                            class="wm-team-page__member-name"
                                        >
                                            Noah Parker
                                        </a>

                                        <span class="wm-team-page__member-email">
                                            noah@externalresearch.org
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-team-page__role">
                                    Collaborator
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    1 project
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__stat">
                                    6 tasks
                                </span>
                            </td>


                            <td>
                                <span class="wm-team-page__last-active">
                                    Invitation sent
                                </span>
                            </td>


                            <td>

                                <span class="wm-team-page__status wm-team-page__status--pending">
                                    <span></span>
                                    Pending
                                </span>

                            </td>


                            <td>

                                <div class="wm-team-page__action">

                                    <button
                                        type="button"
                                        class="wm-team-page__action-btn"
                                        data-team-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-team-page__action-menu">

                                        <button data-member-action="view">
                                            <i class="ph ph-user"></i>
                                            View Profile
                                        </button>

                                        <button data-member-action="resend">
                                            <i class="ph ph-paper-plane-tilt"></i>
                                            Resend Invite
                                        </button>

                                        <button data-member-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <div class="wm-team-page__action-divider"></div>

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

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- ========================================================
                Grid View
            ========================================================= --}}
            <div
                class="wm-team-page__grid-view"
                id="wm-team-grid-view"
            >

                <div class="wm-team-page__grid">


                    {{-- Grid Member 01 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="olivia martin"
                        data-role="admin"
                        data-status="active"
                        data-project="atlas"
                        data-project-count="6"
                        data-last-active="2026-09-24"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--blue">
                                OM
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-member-action="role">
                                        <i class="ph ph-shield-check"></i>
                                        Change Role
                                    </button>

                                    <button data-member-action="message">
                                        <i class="ph ph-chat-circle"></i>
                                        Message
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'olivia') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Olivia Martin
                        </a>

                        <span class="wm-team-page__member-card-email">
                        olivia@researchlab.com
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-shield-check"></i>
                            Admin
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            6 projects
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            42 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--active">
                            <span></span>
                            Active
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Today
                        </span>

                        </div>

                    </div>


                    {{-- Grid Member 02 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="sophia chen"
                        data-role="pi"
                        data-status="active"
                        data-project="neuro"
                        data-project-count="5"
                        data-last-active="2026-09-24"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--purple">
                                SC
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-member-action="role">
                                        <i class="ph ph-shield-check"></i>
                                        Change Role
                                    </button>

                                    <button data-member-action="message">
                                        <i class="ph ph-chat-circle"></i>
                                        Message
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'sophia') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Sophia Chen
                        </a>

                        <span class="wm-team-page__member-card-email">
                        sophia@researchlab.com
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-flask"></i>
                            Principal Investigator
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            5 projects
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            31 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--active">
                            <span></span>
                            Active
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Today
                        </span>

                        </div>

                    </div>


                    {{-- Grid Member 03 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="ethan brooks"
                        data-role="manager"
                        data-status="active"
                        data-project="climate"
                        data-project-count="4"
                        data-last-active="2026-09-23"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--green">
                                EB
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-member-action="role">
                                        <i class="ph ph-shield-check"></i>
                                        Change Role
                                    </button>

                                    <button data-member-action="message">
                                        <i class="ph ph-chat-circle"></i>
                                        Message
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'ethan') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Ethan Brooks
                        </a>

                        <span class="wm-team-page__member-card-email">
                        ethan@researchlab.com
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-kanban"></i>
                            Project Manager
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            4 projects
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            28 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--active">
                            <span></span>
                            Active
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Yesterday
                        </span>

                        </div>

                    </div>


                    {{-- Grid Member 04 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="liam carter"
                        data-role="researcher"
                        data-status="active"
                        data-project="genome"
                        data-project-count="3"
                        data-last-active="2026-09-23"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--cyan">
                                LC
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-member-action="role">
                                        <i class="ph ph-shield-check"></i>
                                        Change Role
                                    </button>

                                    <button data-member-action="message">
                                        <i class="ph ph-chat-circle"></i>
                                        Message
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'liam') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Liam Carter
                        </a>

                        <span class="wm-team-page__member-card-email">
                        liam@researchlab.com
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-flask"></i>
                            Researcher
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            3 projects
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            26 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--active">
                            <span></span>
                            Active
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Yesterday
                        </span>

                        </div>

                    </div>


                    {{-- Grid Member 05 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="maya wilson"
                        data-role="student"
                        data-status="active"
                        data-project="atlas"
                        data-project-count="2"
                        data-last-active="2026-09-22"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--orange">
                                MW
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <button data-member-action="role">
                                        <i class="ph ph-shield-check"></i>
                                        Change Role
                                    </button>

                                    <button data-member-action="message">
                                        <i class="ph ph-chat-circle"></i>
                                        Message
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'maya') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Maya Wilson
                        </a>

                        <span class="wm-team-page__member-card-email">
                        maya@researchlab.com
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-graduation-cap"></i>
                            Graduate Student
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            2 projects
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            18 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--active">
                            <span></span>
                            Active
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Sep 22
                        </span>

                        </div>

                    </div>


                    {{-- Grid Member 06 --}}
                    <div
                        class="wm-team-page__member-card"
                        data-grid-member
                        data-name="noah parker"
                        data-role="collaborator"
                        data-status="pending"
                        data-project="climate"
                        data-project-count="1"
                        data-last-active="2026-09-10"
                    >

                        <div class="wm-team-page__member-card-top">

                            <div class="wm-team-page__avatar wm-team-page__avatar--gray">
                                NP
                            </div>

                            <div class="wm-team-page__action">

                                <button
                                    type="button"
                                    class="wm-team-page__action-btn"
                                    data-team-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-team-page__action-menu">

                                    <button data-member-action="view">
                                        <i class="ph ph-user"></i>
                                        View Profile
                                    </button>

                                    <button data-member-action="resend">
                                        <i class="ph ph-paper-plane-tilt"></i>
                                        Resend Invite
                                    </button>

                                    <button data-member-action="edit">
                                        <i class="ph ph-pencil-simple"></i>
                                        Edit
                                    </button>

                                    <div class="wm-team-page__action-divider"></div>

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


                        <a
                            href="{{ route('team.member', 'noah') }}"
                            class="wm-team-page__member-card-name"
                        >
                            Noah Parker
                        </a>

                        <span class="wm-team-page__member-card-email">
                        noah@externalresearch.org
                    </span>


                        <div class="wm-team-page__member-card-role">
                            <i class="ph ph-handshake"></i>
                            Collaborator
                        </div>


                        <div class="wm-team-page__member-card-meta">

                        <span>
                            <i class="ph ph-folder-simple"></i>
                            1 project
                        </span>

                            <span>
                            <i class="ph ph-check-square"></i>
                            6 tasks
                        </span>

                        </div>


                        <div class="wm-team-page__member-card-footer">

                        <span class="wm-team-page__status wm-team-page__status--pending">
                            <span></span>
                            Pending
                        </span>

                            <span class="wm-team-page__member-card-active">
                            Invited
                        </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Empty State --}}
            <div
                class="wm-team-page__empty"
                id="wm-team-empty"
            >

                <div class="wm-team-page__empty-icon">
                    <i class="ph ph-users-three"></i>
                </div>

                <h3>
                    No team members found
                </h3>

                <p>
                    Try adjusting your search or filters to find the team member you're looking for.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-team-empty-reset"
                >
                    Clear filters
                </button>

            </div>


            {{-- Footer --}}
            <div class="wm-team-page__footer">

                <div class="wm-team-page__footer-info">

                    Showing
                    <strong id="wm-team-visible-count">
                        6
                    </strong>
                    of
                    <strong>
                        24
                    </strong>
                    members

                </div>


                <div class="wm-team-page__pagination">

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn is-disabled"
                        disabled
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn is-active"
                    >
                        1
                    </button>

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn"
                    >
                        2
                    </button>

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn"
                    >
                        3
                    </button>

                    <span class="wm-team-page__pagination-dots">
                    ...
                </span>

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn"
                    >
                        4
                    </button>

                    <button
                        type="button"
                        class="wm-team-page__pagination-btn"
                    >
                        <i class="ph ph-caret-right"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('script')

    <script>
        $(document).ready(function () {

            'use strict';


            // ============================================================
            // Elements
            // ============================================================

            const $search = $('#wm-team-search');
            const $searchClear = $('#wm-team-search-clear');

            const $filterToggle = $('#wm-team-filter-toggle');
            const $filters = $('#wm-team-filters');
            const $filterCount = $('#wm-team-filter-count');

            const $role = $('#wm-team-role');
            const $status = $('#wm-team-status');
            const $project = $('#wm-team-project');

            const $sort = $('#wm-team-sort');

            const $rows = $('[data-member]');
            const $gridCards = $('[data-grid-member]');

            const $listView = $('#wm-team-list-view');
            const $gridView = $('#wm-team-grid-view');

            const $viewButtons = $('[data-team-view]');

            const $activeFilters = $('#wm-team-active-filters');

            const $empty = $('#wm-team-empty');

            const $visibleCount = $('#wm-team-visible-count');

            const $selectAll = $('#wm-team-select-all');


            // ============================================================
            // State
            // ============================================================

            let currentView = 'list';


            // ============================================================
            // Labels
            // ============================================================

            const roleLabels = {
                admin: 'Admin',
                pi: 'Principal Investigator',
                manager: 'Project Manager',
                researcher: 'Researcher',
                student: 'Graduate Student',
                collaborator: 'Collaborator'
            };


            const statusLabels = {
                active: 'Active',
                pending: 'Pending',
                inactive: 'Inactive'
            };


            const projectLabels = {
                atlas: 'Atlas Research',
                neuro: 'Neuro Imaging',
                climate: 'Climate Study',
                genome: 'Genome Project'
            };


            // ============================================================
            // Functions
            // ============================================================

            function getFilters() {

                return {
                    search: $.trim($search.val()).toLowerCase(),
                    role: $role.val(),
                    status: $status.val(),
                    project: $project.val()
                };

            }


            function filterMembers() {

                const filters = getFilters();

                let visibleCount = 0;


                $rows.each(function () {

                    const $row = $(this);

                    const name =
                        String($row.data('name'))
                            .toLowerCase();

                    const role =
                        $row.data('role');

                    const status =
                        $row.data('status');

                    const project =
                        $row.data('project');


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);


                    const matchesRole =
                        filters.role === 'all' ||
                        role === filters.role;


                    const matchesStatus =
                        filters.status === 'all' ||
                        status === filters.status;


                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;


                    const visible =
                        matchesSearch &&
                        matchesRole &&
                        matchesStatus &&
                        matchesProject;


                    $row.toggle(visible);


                    if (visible) {
                        visibleCount++;
                    }

                });


                filterGrid();

                updateActiveFilters();

                updateFilterCount();

                updateEmptyState(visibleCount);

                $visibleCount.text(visibleCount);

            }


            function filterGrid() {

                const filters = getFilters();


                $gridCards.each(function () {

                    const $card = $(this);

                    const name =
                        String($card.data('name'))
                            .toLowerCase();

                    const role =
                        $card.data('role');

                    const status =
                        $card.data('status');

                    const project =
                        $card.data('project');


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);


                    const matchesRole =
                        filters.role === 'all' ||
                        role === filters.role;


                    const matchesStatus =
                        filters.status === 'all' ||
                        status === filters.status;


                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;


                    const visible =
                        matchesSearch &&
                        matchesRole &&
                        matchesStatus &&
                        matchesProject;


                    $card.toggle(visible);

                });

            }


            function updateFilterCount() {

                let count = 0;


                if ($role.val() !== 'all') {
                    count++;
                }

                if ($status.val() !== 'all') {
                    count++;
                }

                if ($project.val() !== 'all') {
                    count++;
                }


                $filterCount.text(count);

                $filterCount.toggle(count > 0);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                let html = '';


                if (filters.role !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-team-page__filter-chip"
                        data-remove-filter="role"
                    >
                        Role: ${roleLabels[filters.role]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.status !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-team-page__filter-chip"
                        data-remove-filter="status"
                    >
                        Status: ${statusLabels[filters.status]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.project !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-team-page__filter-chip"
                        data-remove-filter="project"
                    >
                        Project: ${projectLabels[filters.project]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                $activeFilters.html(html);

            }


            function updateEmptyState(count) {

                if (count === 0) {

                    $empty.addClass('is-visible');

                    $listView.hide();

                    $gridView.hide();

                    return;

                }


                $empty.removeClass('is-visible');


                if (currentView === 'list') {

                    $listView.show();

                    $gridView.hide();

                } else {

                    $listView.hide();

                    $gridView.show();

                }

            }


            function resetFilters() {

                $search.val('');

                $role.val('all');
                $status.val('all');
                $project.val('all');

                $searchClear.hide();

                filterMembers();

            }


            function sortMembers() {

                const sortValue =
                    $sort.val();

                const $tbody =
                    $('#wm-team-table-body');

                const rows =
                    $tbody.find('[data-member]').get();


                rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);


                    if (sortValue === 'name-asc') {

                        return String(
                            $a.data('name')
                        ).localeCompare(
                            String($b.data('name'))
                        );

                    }


                    if (sortValue === 'name-desc') {

                        return String(
                            $b.data('name')
                        ).localeCompare(
                            String($a.data('name'))
                        );

                    }


                    if (sortValue === 'projects') {

                        return Number(
                            $b.data('project-count')
                        ) - Number(
                            $a.data('project-count')
                        );

                    }


                    return String(
                        $b.data('last-active')
                    ).localeCompare(
                        String($a.data('last-active'))
                    );

                });


                $.each(rows, function (_, row) {

                    $tbody.append(row);

                });


                filterMembers();

            }


            function closeMenus() {

                $('.wm-team-page__action')
                    .removeClass('is-open');

            }


            function getMemberName($element) {

                const $row =
                    $element.closest('[data-member]');


                if ($row.length) {

                    return $row
                        .find('.wm-team-page__member-name')
                        .text()
                        .trim();

                }


                return $element
                    .closest('[data-grid-member]')
                    .find('.wm-team-page__member-card-name')
                    .text()
                    .trim();

            }


            function handleMemberAction(
                action,
                memberName
            ) {

                console.log(
                    'Team member action:',
                    action,
                    memberName
                );

            }


            // ============================================================
            // Search
            // ============================================================

            $search.on('input', function () {

                const hasValue =
                    $.trim($(this).val()).length > 0;


                $searchClear.toggle(hasValue);

                filterMembers();

            });


            $searchClear.on('click', function () {

                $search.val('');

                $(this).hide();

                filterMembers();

                $search.trigger('focus');

            });


            // ============================================================
            // Filters
            // ============================================================

            $filterToggle.on('click', function () {

                $filters.toggleClass('is-visible');

            });


            $role
                .add($status)
                .add($project)
                .on('change', function () {

                    filterMembers();

                });


            $('#wm-team-clear-filters')
                .add('#wm-team-empty-reset')
                .on('click', function () {

                    resetFilters();

                });


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');


                    if (filter === 'role') {
                        $role.val('all');
                    }


                    if (filter === 'status') {
                        $status.val('all');
                    }


                    if (filter === 'project') {
                        $project.val('all');
                    }


                    filterMembers();

                }
            );


            // ============================================================
            // Sorting
            // ============================================================

            $sort.on('change', function () {

                sortMembers();

            });


            // ============================================================
            // View Switcher
            // ============================================================

            $viewButtons.on('click', function () {

                const view =
                    $(this).data('team-view');


                currentView = view;


                $viewButtons.removeClass('is-active');

                $(this).addClass('is-active');


                if (view === 'grid') {

                    $listView.hide();

                    $gridView.show();

                } else {

                    $gridView.hide();

                    $listView.show();

                }


                filterMembers();

            });


            // ============================================================
            // Action Menus
            // ============================================================

            $(document).on(
                'click',
                '[data-team-menu]',
                function (event) {

                    event.stopPropagation();


                    const $action =
                        $(this).closest(
                            '.wm-team-page__action'
                        );


                    $('.wm-team-page__action')
                        .not($action)
                        .removeClass('is-open');


                    $action.toggleClass('is-open');

                }
            );


            $(document).on(
                'click',
                '[data-member-action]',
                function (event) {

                    event.stopPropagation();


                    const action =
                        $(this).data('member-action');


                    const memberName =
                        getMemberName($(this));


                    closeMenus();


                    handleMemberAction(
                        action,
                        memberName
                    );

                }
            );


            // ============================================================
            // Header Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-team-action]',
                function () {

                    const action =
                        $(this).data('team-action');


                    console.log(
                        'Team header action:',
                        action
                    );

                }
            );


            // ============================================================
            // Select All
            // ============================================================

            $selectAll.on('change', function () {

                const checked =
                    $(this).is(':checked');


                $('#wm-team-table-body')
                    .find('[data-member]:visible')
                    .find('.wm-team-checkbox')
                    .prop('checked', checked);

            });


            $(document).on(
                'change',
                '.wm-team-checkbox',
                function () {

                    const $visibleCheckboxes =
                        $('#wm-team-table-body')
                            .find('[data-member]:visible')
                            .find('.wm-team-checkbox');


                    const checkedCount =
                        $visibleCheckboxes
                            .filter(':checked')
                            .length;


                    $selectAll.prop(
                        'checked',
                        checkedCount ===
                        $visibleCheckboxes.length &&
                        $visibleCheckboxes.length > 0
                    );

                }
            );


            // ============================================================
            // Member Links
            // ============================================================

            $(document).on(
                'click',
                '.wm-team-page__member-name, .wm-team-page__member-card-name',
                function () {

                    console.log(
                        'Open team member:',
                        $(this).text().trim()
                    );

                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function () {

                    closeMenus();

                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeMenus();

                        $filters.removeClass(
                            'is-visible'
                        );

                    }

                }
            );


            // ============================================================
            // Initial
            // ============================================================

            $searchClear.hide();

            $filterCount.hide();

            $gridView.hide();

            filterMembers();

        });
    </script>

@endpush

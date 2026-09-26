@extends('layout.app')

@section('main')

    <div class="wm-roles-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-roles-page__header">

            <div class="wm-roles-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-roles-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <a
                    href="{{ route('settings.index') }}"
                    class="wm-roles-page__breadcrumb-link"
                >
                    Settings
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Roles & Permissions</span>

            </div>


            <div class="wm-roles-page__heading">

                <div>

                    <h1 class="wm-roles-page__title">
                        Roles & Permissions
                    </h1>

                    <p class="wm-roles-page__subtitle">
                        Manage workspace roles and control what each role can access.
                    </p>

                </div>


                <div class="wm-roles-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        id="resetRoles"
                    >
                        <i class="ph ph-arrow-counter-clockwise"></i>
                        Reset
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        id="addRole"
                    >
                        <i class="ph ph-plus"></i>
                        Add Role
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            SUMMARY
        ============================================================= --}}
        <div class="wm-roles-summary">

            <button
                type="button"
                class="wm-roles-summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-roles-summary-card__icon">
                <i class="ph ph-shield-check"></i>
            </span>

                <span class="wm-roles-summary-card__content">
                <strong>7</strong>
                <span>Total Roles</span>
            </span>

            </button>


            <button
                type="button"
                class="wm-roles-summary-card"
                data-summary-filter="system"
            >

            <span class="wm-roles-summary-card__icon wm-roles-summary-card__icon--purple">
                <i class="ph ph-lock-key"></i>
            </span>

                <span class="wm-roles-summary-card__content">
                <strong>3</strong>
                <span>System Roles</span>
            </span>

            </button>


            <button
                type="button"
                class="wm-roles-summary-card"
                data-summary-filter="custom"
            >

            <span class="wm-roles-summary-card__icon wm-roles-summary-card__icon--cyan">
                <i class="ph ph-sliders-horizontal"></i>
            </span>

                <span class="wm-roles-summary-card__content">
                <strong>4</strong>
                <span>Custom Roles</span>
            </span>

            </button>


            <button
                type="button"
                class="wm-roles-summary-card"
                data-summary-filter="active"
            >

            <span class="wm-roles-summary-card__icon wm-roles-summary-card__icon--success">
                <i class="ph ph-users-three"></i>
            </span>

                <span class="wm-roles-summary-card__content">
                <strong>38</strong>
                <span>Assigned Users</span>
            </span>

            </button>

        </div>


        {{-- ============================================================
            PAGE CONTENT
        ============================================================= --}}
        <div class="wm-roles-layout">

            {{-- ========================================================
                MAIN
            ========================================================= --}}
            <div class="wm-roles-main">

                {{-- ====================================================
                    TOOLBAR
                ===================================================== --}}
                <div class="wm-roles-toolbar">

                    <div class="wm-roles-toolbar__left">

                        <div class="wm-roles-search">

                            <i class="ph ph-magnifying-glass"></i>

                            <input
                                type="search"
                                id="roleSearch"
                                placeholder="Search roles..."
                                autocomplete="off"
                            >

                            <button
                                type="button"
                                class="wm-roles-search__clear"
                                id="clearRoleSearch"
                                aria-label="Clear search"
                            >
                                <i class="ph ph-x"></i>
                            </button>

                        </div>


                        <button
                            type="button"
                            class="wm-roles-filter-toggle"
                            id="roleFilterToggle"
                        >
                            <i class="ph ph-funnel"></i>
                            Filters

                            <span
                                class="wm-roles-filter-toggle__count"
                                id="filterCount"
                            >
                            0
                        </span>
                        </button>

                    </div>


                    <div class="wm-roles-toolbar__right">

                        <div class="wm-roles-sort">

                        <span>
                            Sort by
                        </span>

                            <select id="roleSort">

                                <option value="name-asc">
                                    Name A-Z
                                </option>

                                <option value="name-desc">
                                    Name Z-A
                                </option>

                                <option value="users-desc">
                                    Most Users
                                </option>

                                <option value="users-asc">
                                    Least Users
                                </option>

                                <option value="recent">
                                    Recently Updated
                                </option>

                            </select>

                        </div>


                        <div class="wm-roles-view-toggle">

                            <button
                                type="button"
                                class="is-active"
                                data-role-view="list"
                                aria-label="List view"
                            >
                                <i class="ph ph-list"></i>
                            </button>

                            <button
                                type="button"
                                data-role-view="grid"
                                aria-label="Grid view"
                            >
                                <i class="ph ph-squares-four"></i>
                            </button>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    FILTER PANEL
                ===================================================== --}}
                <div
                    class="wm-roles-filter-panel"
                    id="roleFilterPanel"
                >

                    <div class="wm-roles-filter-panel__grid">

                        <div class="wm-roles-filter-field">

                            <label for="roleTypeFilter">
                                Role Type
                            </label>

                            <select id="roleTypeFilter">

                                <option value="">
                                    All Types
                                </option>

                                <option value="system">
                                    System Role
                                </option>

                                <option value="custom">
                                    Custom Role
                                </option>

                            </select>

                        </div>


                        <div class="wm-roles-filter-field">

                            <label for="roleStatusFilter">
                                Status
                            </label>

                            <select id="roleStatusFilter">

                                <option value="">
                                    All Statuses
                                </option>

                                <option value="active">
                                    Active
                                </option>

                                <option value="inactive">
                                    Inactive
                                </option>

                            </select>

                        </div>


                        <div class="wm-roles-filter-field">

                            <label for="rolePermissionFilter">
                                Permission Level
                            </label>

                            <select id="rolePermissionFilter">

                                <option value="">
                                    All Permissions
                                </option>

                                <option value="full">
                                    Full Access
                                </option>

                                <option value="limited">
                                    Limited Access
                                </option>

                                <option value="read">
                                    Read Only
                                </option>

                            </select>

                        </div>


                        <div class="wm-roles-filter-field">

                            <label for="roleUserFilter">
                                Assigned Users
                            </label>

                            <select id="roleUserFilter">

                                <option value="">
                                    All Users
                                </option>

                                <option value="assigned">
                                    Has Users
                                </option>

                                <option value="empty">
                                    No Users
                                </option>

                            </select>

                        </div>

                    </div>


                    <div class="wm-roles-filter-panel__footer">

                        <button
                            type="button"
                            class="btn btn-light btn-sm"
                            id="clearRoleFilters"
                        >
                            Clear Filters
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary btn-sm"
                            id="applyRoleFilters"
                        >
                            Apply Filters
                        </button>

                    </div>

                </div>


                {{-- ====================================================
                    ACTIVE FILTERS
                ===================================================== --}}
                <div
                    class="wm-roles-active-filters"
                    id="roleActiveFilters"
                ></div>


                {{-- ====================================================
                    LIST VIEW
                ===================================================== --}}
                <div
                    class="wm-roles-list-view"
                    id="roleListView"
                >

                    <div class="wm-roles-table-card">

                        <div class="wm-roles-table-wrap">

                            <table class="wm-roles-table">

                                <thead>

                                <tr>

                                    <th>
                                        Role
                                    </th>

                                    <th>
                                        Type
                                    </th>

                                    <th>
                                        Permissions
                                    </th>

                                    <th>
                                        Users
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Updated
                                    </th>

                                    <th class="wm-roles-table__actions">
                                        <span class="visually-hidden">
                                            Actions
                                        </span>
                                    </th>

                                </tr>

                                </thead>


                                <tbody id="rolesTableBody">

                                {{-- Admin --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Administrator"
                                    data-role-type="system"
                                    data-role-status="active"
                                    data-role-permission="full"
                                    data-role-users="12"
                                    data-role-updated="2026-09-23"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--primary">
                                                <i class="ph ph-shield-star"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Administrator
                                                </strong>

                                                <span>
                                                    Full workspace administration
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--system">
                                            System
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Full Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            12
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 23, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- PI --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Principal Investigator"
                                    data-role-type="system"
                                    data-role-status="active"
                                    data-role-permission="full"
                                    data-role-users="4"
                                    data-role-updated="2026-09-20"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--purple">
                                                <i class="ph ph-flask"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Principal Investigator
                                                </strong>

                                                <span>
                                                    Research leadership and project control
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--system">
                                            System
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Full Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            4
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 20, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- Project Manager --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Project Manager"
                                    data-role-type="system"
                                    data-role-status="active"
                                    data-role-permission="full"
                                    data-role-users="6"
                                    data-role-updated="2026-09-18"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--cyan">
                                                <i class="ph ph-kanban"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Project Manager
                                                </strong>

                                                <span>
                                                    Project planning and team management
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--system">
                                            System
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Full Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            6
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 18, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- Researcher --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Researcher"
                                    data-role-type="custom"
                                    data-role-status="active"
                                    data-role-permission="limited"
                                    data-role-users="9"
                                    data-role-updated="2026-09-17"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--success">
                                                <i class="ph ph-user"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Researcher
                                                </strong>

                                                <span>
                                                    Standard research project access
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--custom">
                                            Custom
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Limited Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            9
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 17, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                                <button
                                                    class="is-danger"
                                                    data-role-action="delete"
                                                >
                                                    <i class="ph ph-trash"></i>
                                                    Delete
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- Graduate Student --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Graduate Student"
                                    data-role-type="custom"
                                    data-role-status="active"
                                    data-role-permission="limited"
                                    data-role-users="5"
                                    data-role-updated="2026-09-15"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--warning">
                                                <i class="ph ph-graduation-cap"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Graduate Student
                                                </strong>

                                                <span>
                                                    Limited project and task access
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--custom">
                                            Custom
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Limited Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            5
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 15, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                                <button
                                                    class="is-danger"
                                                    data-role-action="delete"
                                                >
                                                    <i class="ph ph-trash"></i>
                                                    Delete
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- Collaborator --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Collaborator"
                                    data-role-type="custom"
                                    data-role-status="active"
                                    data-role-permission="limited"
                                    data-role-users="2"
                                    data-role-updated="2026-09-11"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--info">
                                                <i class="ph ph-handshake"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Collaborator
                                                </strong>

                                                <span>
                                                    External project collaboration
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--custom">
                                            Custom
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Limited Access
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            2
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--active">
                                            <i></i>
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Sep 11, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                                <button
                                                    class="is-danger"
                                                    data-role-action="delete"
                                                >
                                                    <i class="ph ph-trash"></i>
                                                    Delete
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>


                                {{-- Guest --}}
                                <tr
                                    class="wm-role-row"
                                    data-role-name="Guest"
                                    data-role-type="custom"
                                    data-role-status="inactive"
                                    data-role-permission="read"
                                    data-role-users="0"
                                    data-role-updated="2026-08-29"
                                >

                                    <td>

                                        <div class="wm-role-cell">

                                            <div class="wm-role-cell__icon wm-role-cell__icon--gray">
                                                <i class="ph ph-eye"></i>
                                            </div>

                                            <div class="wm-role-cell__content">

                                                <strong>
                                                    Guest
                                                </strong>

                                                <span>
                                                    View-only access to shared projects
                                                </span>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="wm-role-type wm-role-type--custom">
                                            Custom
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-permission">
                                            Read Only
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-users">
                                            0
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-status wm-role-status--inactive">
                                            <i></i>
                                            Inactive
                                        </span>
                                    </td>

                                    <td>
                                        <span class="wm-role-date">
                                            Aug 29, 2026
                                        </span>
                                    </td>

                                    <td class="wm-roles-table__actions">

                                        <div class="wm-role-action">

                                            <button
                                                type="button"
                                                class="wm-role-action__trigger"
                                                data-role-menu
                                            >
                                                <i class="ph ph-dots-three-vertical"></i>
                                            </button>

                                            <div class="wm-role-action__menu">

                                                <button data-role-action="view">
                                                    <i class="ph ph-eye"></i>
                                                    View Role
                                                </button>

                                                <button data-role-action="edit">
                                                    <i class="ph ph-pencil-simple"></i>
                                                    Edit Role
                                                </button>

                                                <button data-role-action="duplicate">
                                                    <i class="ph ph-copy"></i>
                                                    Duplicate
                                                </button>

                                                <button
                                                    class="is-danger"
                                                    data-role-action="delete"
                                                >
                                                    <i class="ph ph-trash"></i>
                                                    Delete
                                                </button>

                                            </div>

                                        </div>

                                    </td>

                                </tr>

                                </tbody>

                            </table>

                        </div>


                        {{-- Empty --}}
                        <div
                            class="wm-roles-empty"
                            id="rolesEmpty"
                        >

                            <div class="wm-roles-empty__icon">
                                <i class="ph ph-shield-slash"></i>
                            </div>

                            <h3>
                                No roles found
                            </h3>

                            <p>
                                Try changing your search or filters.
                            </p>

                            <button
                                type="button"
                                class="btn btn-light"
                                id="emptyClearFilters"
                            >
                                Clear Filters
                            </button>

                        </div>


                        {{-- Pagination --}}
                        <div
                            class="wm-roles-pagination"
                            id="rolesPagination"
                        >

                            <div class="wm-roles-pagination__info">
                                Showing <strong>1–7</strong> of <strong>7</strong> roles
                            </div>

                            <div class="wm-roles-pagination__actions">

                                <button
                                    type="button"
                                    disabled
                                    aria-label="Previous page"
                                >
                                    <i class="ph ph-caret-left"></i>
                                </button>

                                <button
                                    type="button"
                                    class="is-active"
                                >
                                    1
                                </button>

                                <button
                                    type="button"
                                    disabled
                                    aria-label="Next page"
                                >
                                    <i class="ph ph-caret-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    GRID VIEW
                ===================================================== --}}
                <div
                    class="wm-roles-grid-view"
                    id="roleGridView"
                >

                    <div class="wm-roles-grid">

                        <div
                            class="wm-role-grid-card"
                            data-role-name="Administrator"
                            data-role-type="system"
                            data-role-status="active"
                            data-role-permission="full"
                            data-role-users="12"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--primary">
                                    <i class="ph ph-shield-star"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Administrator
                                </h3>

                                <p>
                                    Full workspace administration
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>12</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Full</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--system">
                                System
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Principal Investigator"
                            data-role-type="system"
                            data-role-status="active"
                            data-role-permission="full"
                            data-role-users="4"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--purple">
                                    <i class="ph ph-flask"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Principal Investigator
                                </h3>

                                <p>
                                    Research leadership and project control
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>4</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Full</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--system">
                                System
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Project Manager"
                            data-role-type="system"
                            data-role-status="active"
                            data-role-permission="full"
                            data-role-users="6"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--cyan">
                                    <i class="ph ph-kanban"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Project Manager
                                </h3>

                                <p>
                                    Project planning and team management
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>6</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Full</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--system">
                                System
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Researcher"
                            data-role-type="custom"
                            data-role-status="active"
                            data-role-permission="limited"
                            data-role-users="9"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--success">
                                    <i class="ph ph-user"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button
                                            class="is-danger"
                                            data-role-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Researcher
                                </h3>

                                <p>
                                    Standard research project access
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>9</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Limited</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--custom">
                                Custom
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Graduate Student"
                            data-role-type="custom"
                            data-role-status="active"
                            data-role-permission="limited"
                            data-role-users="5"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--warning">
                                    <i class="ph ph-graduation-cap"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button
                                            class="is-danger"
                                            data-role-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Graduate Student
                                </h3>

                                <p>
                                    Limited project and task access
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>5</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Limited</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--custom">
                                Custom
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Collaborator"
                            data-role-type="custom"
                            data-role-status="active"
                            data-role-permission="limited"
                            data-role-users="2"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--info">
                                    <i class="ph ph-handshake"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button
                                            class="is-danger"
                                            data-role-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Collaborator
                                </h3>

                                <p>
                                    External project collaboration
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>2</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Limited</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--custom">
                                Custom
                            </span>

                                <span class="wm-role-status wm-role-status--active">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>


                        <div
                            class="wm-role-grid-card"
                            data-role-name="Guest"
                            data-role-type="custom"
                            data-role-status="inactive"
                            data-role-permission="read"
                            data-role-users="0"
                        >

                            <div class="wm-role-grid-card__top">

                                <div class="wm-role-cell__icon wm-role-cell__icon--gray">
                                    <i class="ph ph-eye"></i>
                                </div>

                                <div class="wm-role-action">

                                    <button
                                        type="button"
                                        class="wm-role-action__trigger"
                                        data-role-menu
                                    >
                                        <i class="ph ph-dots-three-vertical"></i>
                                    </button>

                                    <div class="wm-role-action__menu">

                                        <button data-role-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Role
                                        </button>

                                        <button data-role-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit Role
                                        </button>

                                        <button data-role-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button
                                            class="is-danger"
                                            data-role-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <div class="wm-role-grid-card__body">

                                <h3>
                                    Guest
                                </h3>

                                <p>
                                    View-only access to shared projects
                                </p>

                            </div>


                            <div class="wm-role-grid-card__meta">

                                <div>
                                    <span>Users</span>
                                    <strong>0</strong>
                                </div>

                                <div>
                                    <span>Access</span>
                                    <strong>Read Only</strong>
                                </div>

                            </div>


                            <div class="wm-role-grid-card__footer">

                            <span class="wm-role-type wm-role-type--custom">
                                Custom
                            </span>

                                <span class="wm-role-status wm-role-status--inactive">
                                <i></i>
                                Inactive
                            </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ========================================================
                SIDEBAR
            ========================================================= --}}
            <aside class="wm-roles-sidebar">

                <div class="wm-roles-sidebar-card">

                    <div class="wm-roles-sidebar-card__header">

                        <div class="wm-roles-sidebar-card__icon">
                            <i class="ph ph-info"></i>
                        </div>

                        <div>

                            <h3>
                                About Roles
                            </h3>

                            <p>
                                Control workspace access
                            </p>

                        </div>

                    </div>


                    <div class="wm-roles-sidebar-card__body">

                        <p>
                            Roles define what members can see and do across your workspace.
                        </p>

                        <ul>

                            <li>
                                <i class="ph ph-check"></i>
                                Manage project access
                            </li>

                            <li>
                                <i class="ph ph-check"></i>
                                Control task permissions
                            </li>

                            <li>
                                <i class="ph ph-check"></i>
                                Restrict sensitive settings
                            </li>

                            <li>
                                <i class="ph ph-check"></i>
                                Assign permissions by role
                            </li>

                        </ul>

                    </div>

                </div>


                <div class="wm-roles-sidebar-card">

                    <div class="wm-roles-sidebar-card__header">

                        <div class="wm-roles-sidebar-card__icon wm-roles-sidebar-card__icon--warning">
                            <i class="ph ph-warning"></i>
                        </div>

                        <div>

                            <h3>
                                System Roles
                            </h3>

                            <p>
                                Protected permissions
                            </p>

                        </div>

                    </div>


                    <div class="wm-roles-sidebar-card__body">

                        <p>
                            System roles are built into the workspace and cannot be deleted.
                        </p>

                        <div class="wm-roles-protected">

                        <span>
                            Administrator
                        </span>

                            <span>
                            Principal Investigator
                        </span>

                            <span>
                            Project Manager
                        </span>

                        </div>

                    </div>

                </div>

            </aside>

        </div>

    </div>


    {{-- ================================================================
        ROLE MODAL
    ================================================================= --}}
    <div
        class="modal fade"
        id="roleModal"
        tabindex="-1"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content wm-role-modal">

                <div class="modal-header">

                    <div>

                        <h5
                            class="modal-title"
                            id="roleModalTitle"
                        >
                            Create New Role
                        </h5>

                        <p>
                            Define the role and choose its permissions.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>

                </div>


                <div class="modal-body">

                    <div class="wm-role-form">

                        <div class="row g-4">

                            <div class="col-md-7">

                                <div class="wm-role-form__field">

                                    <label for="roleName">
                                        Role Name
                                    </label>

                                    <input
                                        type="text"
                                        id="roleName"
                                        class="form-control"
                                        placeholder="e.g. Research Coordinator"
                                    >

                                </div>

                            </div>


                            <div class="col-md-5">

                                <div class="wm-role-form__field">

                                    <label for="roleModalStatus">
                                        Status
                                    </label>

                                    <select
                                        id="roleModalStatus"
                                        class="form-select"
                                    >
                                        <option value="active">
                                            Active
                                        </option>

                                        <option value="inactive">
                                            Inactive
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="wm-role-form__field">

                                    <label for="roleDescription">
                                        Description
                                    </label>

                                    <textarea
                                        id="roleDescription"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Describe what this role is responsible for..."
                                    ></textarea>

                                </div>

                            </div>

                        </div>


                        <div class="wm-role-permissions">

                            <div class="wm-role-permissions__header">

                                <div>

                                    <h3>
                                        Permissions
                                    </h3>

                                    <p>
                                        Choose what this role can access.
                                    </p>

                                </div>


                                <label class="wm-role-select-all">

                                    <input
                                        type="checkbox"
                                        id="selectAllPermissions"
                                    >

                                    <span>
                                    Select All
                                </span>

                                </label>

                            </div>


                            <div class="wm-role-permissions__search">

                                <i class="ph ph-magnifying-glass"></i>

                                <input
                                    type="search"
                                    id="permissionSearch"
                                    placeholder="Search permissions..."
                                >

                            </div>


                            <div class="wm-role-permission-groups">

                                {{-- Projects --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-folder"></i>

                                            <strong>
                                                Projects
                                            </strong>

                                        </div>

                                        <span>
                                        5 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">

                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="projects.view"
                                            >

                                            <span>
                                            View projects
                                        </span>

                                        </label>


                                        <label class="wm-role-permission-item">

                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="projects.create"
                                            >

                                            <span>
                                            Create projects
                                        </span>

                                        </label>


                                        <label class="wm-role-permission-item">

                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="projects.edit"
                                            >

                                            <span>
                                            Edit projects
                                        </span>

                                        </label>


                                        <label class="wm-role-permission-item">

                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="projects.delete"
                                            >

                                            <span>
                                            Delete projects
                                        </span>

                                        </label>


                                        <label class="wm-role-permission-item">

                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="projects.manage"
                                            >

                                            <span>
                                            Manage project settings
                                        </span>

                                        </label>

                                    </div>

                                </div>


                                {{-- Tasks --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-check-square"></i>

                                            <strong>
                                                Tasks
                                            </strong>

                                        </div>

                                        <span>
                                        5 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="tasks.view"
                                            >
                                            <span>View tasks</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="tasks.create"
                                            >
                                            <span>Create tasks</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="tasks.edit"
                                            >
                                            <span>Edit tasks</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="tasks.delete"
                                            >
                                            <span>Delete tasks</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="tasks.assign"
                                            >
                                            <span>Assign tasks</span>
                                        </label>

                                    </div>

                                </div>


                                {{-- Team --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-users-three"></i>

                                            <strong>
                                                Team
                                            </strong>

                                        </div>

                                        <span>
                                        4 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="team.view"
                                            >
                                            <span>View team members</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="team.invite"
                                            >
                                            <span>Invite members</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="team.edit"
                                            >
                                            <span>Edit members</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="team.remove"
                                            >
                                            <span>Remove members</span>
                                        </label>

                                    </div>

                                </div>


                                {{-- Files --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-files"></i>

                                            <strong>
                                                Files & Documents
                                            </strong>

                                        </div>

                                        <span>
                                        4 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="files.view"
                                            >
                                            <span>View files</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="files.upload"
                                            >
                                            <span>Upload files</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="files.edit"
                                            >
                                            <span>Edit documents</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="files.delete"
                                            >
                                            <span>Delete files</span>
                                        </label>

                                    </div>

                                </div>


                                {{-- Reports --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-chart-bar"></i>

                                            <strong>
                                                Reports
                                            </strong>

                                        </div>

                                        <span>
                                        3 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="reports.view"
                                            >
                                            <span>View reports</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="reports.create"
                                            >
                                            <span>Create reports</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="reports.export"
                                            >
                                            <span>Export reports</span>
                                        </label>

                                    </div>

                                </div>


                                {{-- Settings --}}
                                <div
                                    class="wm-role-permission-group"
                                    data-permission-group
                                >

                                    <div class="wm-role-permission-group__header">

                                        <div>

                                            <i class="ph ph-gear"></i>

                                            <strong>
                                                Workspace Settings
                                            </strong>

                                        </div>

                                        <span>
                                        4 permissions
                                    </span>

                                    </div>


                                    <div class="wm-role-permission-list">

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="settings.view"
                                            >
                                            <span>View settings</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="settings.edit"
                                            >
                                            <span>Edit workspace settings</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="settings.roles"
                                            >
                                            <span>Manage roles</span>
                                        </label>

                                        <label class="wm-role-permission-item">
                                            <input
                                                type="checkbox"
                                                class="role-permission"
                                                data-permission="settings.billing"
                                            >
                                            <span>Manage billing</span>
                                        </label>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

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
                        id="saveRole"
                    >
                        <i class="ph ph-check"></i>
                        Create Role
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
            // Variables
            // ============================================================

            const $page = $('.wm-roles-page');
            const $rows = $('.wm-role-row');
            const $gridCards = $('.wm-role-grid-card');


            let activeView = 'list';

            let filters = {
                type: '',
                status: '',
                permission: '',
                users: ''
            };


            // ============================================================
            // Helpers
            // ============================================================

            function showToast(
                title,
                message,
                icon = 'success'
            ) {

                Swal.fire({
                    icon: icon,
                    title: title,
                    text: message,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2200,
                    timerProgressBar: true
                });
            }


            function closeRoleMenus() {

                $('.wm-role-action').removeClass('is-open');
            }


            function getSearchValue() {

                return $.trim(
                    $('#roleSearch').val()
                ).toLowerCase();
            }


            function roleMatches(
                $element,
                search
            ) {

                const name =
                    String($element.data('role-name') || '')
                        .toLowerCase();

                const type =
                    String($element.data('role-type') || '')
                        .toLowerCase();

                const status =
                    String($element.data('role-status') || '')
                        .toLowerCase();

                const permission =
                    String($element.data('role-permission') || '')
                        .toLowerCase();

                const users =
                    parseInt(
                        $element.data('role-users'),
                        10
                    ) || 0;


                if (
                    search &&
                    name.indexOf(search) === -1 &&
                    type.indexOf(search) === -1 &&
                    status.indexOf(search) === -1 &&
                    permission.indexOf(search) === -1
                ) {
                    return false;
                }


                if (
                    filters.type &&
                    type !== filters.type
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
                    filters.permission &&
                    permission !== filters.permission
                ) {
                    return false;
                }


                if (
                    filters.users === 'assigned' &&
                    users <= 0
                ) {
                    return false;
                }


                if (
                    filters.users === 'empty' &&
                    users > 0
                ) {
                    return false;
                }


                return true;
            }


            function updateFilterCount() {

                let count = 0;

                $.each(filters, function (key, value) {

                    if (value) {
                        count++;
                    }

                });


                $('#filterCount')
                    .text(count)
                    .toggle(count > 0);
            }


            function renderActiveFilters() {

                const $container =
                    $('#roleActiveFilters');

                $container.empty();


                const labels = {
                    type: {
                        system: 'System Roles',
                        custom: 'Custom Roles'
                    },
                    status: {
                        active: 'Active',
                        inactive: 'Inactive'
                    },
                    permission: {
                        full: 'Full Access',
                        limited: 'Limited Access',
                        read: 'Read Only'
                    },
                    users: {
                        assigned: 'Has Users',
                        empty: 'No Users'
                    }
                };


                $.each(filters, function (key, value) {

                    if (!value) {
                        return;
                    }


                    const label =
                        labels[key] &&
                        labels[key][value]
                            ? labels[key][value]
                            : value;


                    const $chip = $(`
                    <button
                        type="button"
                        class="wm-roles-filter-chip"
                        data-remove-filter="${key}"
                    >
                        ${label}
                        <i class="ph ph-x"></i>
                    </button>
                `);


                    $container.append($chip);
                });


                const search =
                    $.trim($('#roleSearch').val());


                if (search) {

                    $container.prepend(`
                    <button
                        type="button"
                        class="wm-roles-filter-chip"
                        data-remove-search
                    >
                        Search: "${search}"
                        <i class="ph ph-x"></i>
                    </button>
                `);
                }


                if (
                    $container.children().length
                ) {

                    $container.addClass('has-filters');

                } else {

                    $container.removeClass('has-filters');
                }
            }


            function updateEmptyState(
                visibleCount
            ) {

                if (visibleCount === 0) {

                    $('#rolesEmpty')
                        .addClass('is-visible');

                    $('#rolesPagination')
                        .hide();

                } else {

                    $('#rolesEmpty')
                        .removeClass('is-visible');

                    $('#rolesPagination')
                        .show();
                }
            }


            function applyFilters() {

                const search =
                    getSearchValue();

                let visibleCount = 0;


                $rows.each(function () {

                    const $row = $(this);

                    const match =
                        roleMatches(
                            $row,
                            search
                        );


                    $row.toggle(match);

                    if (match) {
                        visibleCount++;
                    }

                });


                $gridCards.each(function () {

                    const $card = $(this);

                    const match =
                        roleMatches(
                            $card,
                            search
                        );


                    $card.toggle(match);

                });


                updateEmptyState(
                    visibleCount
                );

                updateFilterCount();

                renderActiveFilters();

                $('#clearRoleSearch')
                    .toggle(!!search);
            }


            function sortRoles() {

                const sort =
                    $('#roleSort').val();

                const $tableBody =
                    $('#rolesTableBody');


                const $sortedRows =
                    $rows.get().sort(function (a, b) {

                        const $a = $(a);
                        const $b = $(b);


                        if (sort === 'name-asc') {

                            return String(
                                $a.data('role-name')
                            ).localeCompare(
                                String($b.data('role-name'))
                            );
                        }


                        if (sort === 'name-desc') {

                            return String(
                                $b.data('role-name')
                            ).localeCompare(
                                String($a.data('role-name'))
                            );
                        }


                        if (sort === 'users-desc') {

                            return (
                                Number($b.data('role-users')) -
                                Number($a.data('role-users'))
                            );
                        }


                        if (sort === 'users-asc') {

                            return (
                                Number($a.data('role-users')) -
                                Number($b.data('role-users'))
                            );
                        }


                        return 0;
                    });


                $.each(
                    $sortedRows,
                    function (index, row) {

                        $tableBody.append(row);
                    }
                );


                applyFilters();
            }


            function switchView(
                view
            ) {

                activeView = view;


                $('[data-role-view]')
                    .removeClass('is-active');

                $(
                    '[data-role-view="' +
                    view +
                    '"]'
                ).addClass('is-active');


                if (view === 'grid') {

                    $('#roleListView').hide();

                    $('#roleGridView').show();

                } else {

                    $('#roleGridView').hide();

                    $('#roleListView').show();
                }
            }


            function openRoleModal(
                mode = 'create',
                roleName = ''
            ) {

                $('#roleModalTitle').text(
                    mode === 'edit'
                        ? 'Edit Role'
                        : 'Create New Role'
                );


                $('#saveRole').html(
                    mode === 'edit'
                        ? '<i class="ph ph-check"></i> Save Changes'
                        : '<i class="ph ph-check"></i> Create Role'
                );


                if (mode === 'edit') {

                    $('#roleName')
                        .val(roleName);

                } else {

                    $('#roleName')
                        .val('');

                    $('#roleDescription')
                        .val('');

                    $('#roleModalStatus')
                        .val('active');

                    $('.role-permission')
                        .prop('checked', false);

                    $('#selectAllPermissions')
                        .prop('checked', false);
                }


                const modal =
                    bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('roleModal')
                    );


                modal.show();
            }


            // ============================================================
            // Search
            // ============================================================

            $('#roleSearch').on(
                'input',
                function () {

                    applyFilters();
                }
            );


            $('#clearRoleSearch').on(
                'click',
                function () {

                    $('#roleSearch')
                        .val('')
                        .trigger('input')
                        .focus();
                }
            );


            // ============================================================
            // Filter Panel
            // ============================================================

            $('#roleFilterToggle').on(
                'click',
                function () {

                    $('#roleFilterPanel')
                        .slideToggle(180);
                }
            );


            $('#applyRoleFilters').on(
                'click',
                function () {

                    filters.type =
                        $('#roleTypeFilter').val();

                    filters.status =
                        $('#roleStatusFilter').val();

                    filters.permission =
                        $('#rolePermissionFilter').val();

                    filters.users =
                        $('#roleUserFilter').val();


                    applyFilters();

                    $('#roleFilterPanel')
                        .slideUp(180);
                }
            );


            $('#clearRoleFilters').on(
                'click',
                function () {

                    $('#roleTypeFilter').val('');
                    $('#roleStatusFilter').val('');
                    $('#rolePermissionFilter').val('');
                    $('#roleUserFilter').val('');

                    filters = {
                        type: '',
                        status: '',
                        permission: '',
                        users: ''
                    };


                    applyFilters();
                }
            );


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const key =
                        $(this).data('remove-filter');


                    filters[key] = '';

                    $('#' + (
                        key === 'type'
                            ? 'roleTypeFilter'
                            : key === 'status'
                                ? 'roleStatusFilter'
                                : key === 'permission'
                                    ? 'rolePermissionFilter'
                                    : 'roleUserFilter'
                    )).val('');


                    applyFilters();
                }
            );


            $(document).on(
                'click',
                '[data-remove-search]',
                function () {

                    $('#roleSearch')
                        .val('')
                        .trigger('input');
                }
            );


            $('#emptyClearFilters').on(
                'click',
                function () {

                    $('#clearRoleFilters').trigger('click');

                    $('#roleSearch')
                        .val('')
                        .trigger('input');
                }
            );


            // ============================================================
            // Summary Filters
            // ============================================================

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const filter =
                        $(this).data('summary-filter');


                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $(this)
                        .addClass('is-active');


                    if (filter === 'all') {

                        filters = {
                            type: '',
                            status: '',
                            permission: '',
                            users: ''
                        };

                    } else if (filter === 'system') {

                        filters = {
                            type: 'system',
                            status: '',
                            permission: '',
                            users: ''
                        };

                    } else if (filter === 'custom') {

                        filters = {
                            type: 'custom',
                            status: '',
                            permission: '',
                            users: ''
                        };

                    } else if (filter === 'active') {

                        filters = {
                            type: '',
                            status: 'active',
                            permission: '',
                            users: 'assigned'
                        };
                    }


                    $('#roleTypeFilter')
                        .val(filters.type);

                    $('#roleStatusFilter')
                        .val(filters.status);

                    $('#rolePermissionFilter')
                        .val(filters.permission);

                    $('#roleUserFilter')
                        .val(filters.users);


                    applyFilters();
                }
            );


            // ============================================================
            // Sort
            // ============================================================

            $('#roleSort').on(
                'change',
                function () {

                    sortRoles();
                }
            );


            // ============================================================
            // View
            // ============================================================

            $(document).on(
                'click',
                '[data-role-view]',
                function () {

                    switchView(
                        $(this).data('role-view')
                    );
                }
            );


            // ============================================================
            // Role Menu
            // ============================================================

            $(document).on(
                'click',
                '[data-role-menu]',
                function (event) {

                    event.stopPropagation();


                    const $action =
                        $(this).closest('.wm-role-action');


                    $('.wm-role-action')
                        .not($action)
                        .removeClass('is-open');


                    $action.toggleClass('is-open');
                }
            );


            $(document).on(
                'click',
                '[data-role-action]',
                function (event) {

                    event.stopPropagation();


                    const action =
                        $(this).data('role-action');

                    const $role =
                        $(this).closest(
                            '.wm-role-row, .wm-role-grid-card'
                        );

                    const roleName =
                        $role.data('role-name');


                    closeRoleMenus();


                    if (action === 'view') {

                        showToast(
                            'Role details',
                            roleName + ' details will open here.',
                            'info'
                        );

                        return;
                    }


                    if (action === 'edit') {

                        openRoleModal(
                            'edit',
                            roleName
                        );

                        return;
                    }


                    if (action === 'duplicate') {

                        Swal.fire({
                            icon: 'question',
                            title: 'Duplicate role?',
                            text:
                                'A copy of "' +
                                roleName +
                                '" will be created.',
                            showCancelButton: true,
                            confirmButtonText: 'Duplicate',
                            cancelButtonText: 'Cancel'
                        }).then(function (result) {

                            if (result.isConfirmed) {

                                showToast(
                                    'Role duplicated',
                                    roleName +
                                    ' has been duplicated.'
                                );
                            }
                        });

                        return;
                    }


                    if (action === 'delete') {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Delete role?',
                            text:
                                'This action cannot be undone.',
                            showCancelButton: true,
                            confirmButtonText: 'Delete Role',
                            cancelButtonText: 'Cancel',
                            confirmButtonColor: '#EF4444'
                        }).then(function (result) {

                            if (result.isConfirmed) {

                                $role.fadeOut(
                                    220,
                                    function () {
                                        $(this).remove();

                                        applyFilters();
                                    }
                                );


                                showToast(
                                    'Role deleted',
                                    roleName +
                                    ' has been removed.'
                                );
                            }
                        });
                    }
                }
            );


            // ============================================================
            // Add Role
            // ============================================================

            $('#addRole').on(
                'click',
                function () {

                    openRoleModal();
                }
            );


            // ============================================================
            // Save Role
            // ============================================================

            $('#saveRole').on(
                'click',
                function () {

                    const name =
                        $.trim(
                            $('#roleName').val()
                        );

                    const description =
                        $.trim(
                            $('#roleDescription').val()
                        );


                    if (!name) {

                        $('#roleName')
                            .addClass('is-invalid')
                            .focus();

                        showToast(
                            'Role name required',
                            'Please enter a name for this role.',
                            'error'
                        );

                        return;
                    }


                    $('#roleName')
                        .removeClass('is-invalid');


                    const selectedPermissions =
                        $('.role-permission:checked')
                            .length;


                    const $button =
                        $(this);


                    $button
                        .prop('disabled', true)
                        .html(`
                        <span class="wm-role-spinner"></span>
                        Saving...
                    `);


                    setTimeout(function () {

                        $button
                            .prop('disabled', false)
                            .html(`
                            <i class="ph ph-check"></i>
                            Create Role
                        `);


                        const modal =
                            bootstrap.Modal.getInstance(
                                document.getElementById('roleModal')
                            );


                        if (modal) {
                            modal.hide();
                        }


                        showToast(
                            'Role created',
                            name +
                            ' has been created with ' +
                            selectedPermissions +
                            ' permissions.'
                        );

                    }, 700);
                }
            );


            // ============================================================
            // Permission Search
            // ============================================================

            $('#permissionSearch').on(
                'input',
                function () {

                    const query =
                        $.trim(
                            $(this).val()
                        ).toLowerCase();


                    $('[data-permission-group]')
                        .each(function () {

                            const $group =
                                $(this);

                            let visible =
                                0;


                            $group
                                .find(
                                    '.wm-role-permission-item'
                                )
                                .each(function () {

                                    const $item =
                                        $(this);

                                    const text =
                                        $item.text()
                                            .toLowerCase();

                                    const match =
                                        !query ||
                                        text.indexOf(query) !== -1;


                                    $item.toggle(match);


                                    if (match) {
                                        visible++;
                                    }

                                });


                            $group.toggle(
                                visible > 0
                            );

                        });
                }
            );


            // ============================================================
            // Select All Permissions
            // ============================================================

            $('#selectAllPermissions').on(
                'change',
                function () {

                    $('.role-permission:visible')
                        .prop(
                            'checked',
                            $(this).is(':checked')
                        );
                }
            );


            $(document).on(
                'change',
                '.role-permission',
                function () {

                    const total =
                        $('.role-permission:visible')
                            .length;

                    const checked =
                        $('.role-permission:visible:checked')
                            .length;


                    $('#selectAllPermissions')
                        .prop(
                            'checked',
                            total > 0 &&
                            total === checked
                        );
                }
            );


            // ============================================================
            // Reset
            // ============================================================

            $('#resetRoles').on(
                'click',
                function () {

                    $('#roleSearch')
                        .val('');

                    filters = {
                        type: '',
                        status: '',
                        permission: '',
                        users: ''
                    };


                    $('#roleTypeFilter').val('');
                    $('#roleStatusFilter').val('');
                    $('#rolePermissionFilter').val('');
                    $('#roleUserFilter').val('');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $('[data-summary-filter="all"]')
                        .addClass('is-active');


                    $('#roleSort')
                        .val('name-asc');


                    sortRoles();

                    switchView('list');

                    $('#roleFilterPanel')
                        .hide();

                    showToast(
                        'Roles reset',
                        'The roles view has been reset.',
                        'info'
                    );
                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function () {

                    closeRoleMenus();
                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeRoleMenus();
                    }
                }
            );


            // ============================================================
            // Initial
            // ============================================================

            $('#roleGridView')
                .hide();

            $('#roleFilterPanel')
                .hide();

            $('#filterCount')
                .hide();

            $('#clearRoleSearch')
                .hide();

            $('#rolesEmpty')
                .removeClass('is-visible');

            applyFilters();

        });
    </script>
@endpush

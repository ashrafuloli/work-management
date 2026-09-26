@extends('layout.app')

@section('main')

    <div class="wm-projects-page">


        <!-- =================================================
             PAGE HEADER
             ================================================= -->

        <div class="wm-projects-page__header">


            <div class="wm-projects-page__heading">

                        <span class="wm-projects-page__eyebrow">
                            Workspace
                        </span>

                <h2 class="wm-projects-page__title">
                    Projects
                </h2>

                <p class="wm-projects-page__description">
                    Manage and track all projects across your workspace.
                </p>

            </div>


            <div class="wm-projects-page__actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                >

                    <i class="ph ph-upload-simple"></i>

                    Import

                </button>


                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="wm-create-project"
                >

                    <i class="ph ph-plus"></i>

                    Create Project

                </button>

            </div>

        </div>



        <!-- =================================================
             PROJECT SUMMARY
             ================================================= -->

        <div class="row g-3 wm-projects-page__summary">


            <!-- All -->

            <div class="col-12 col-sm-6 col-xl-3">

                <button
                    type="button"
                    class="wm-project-summary is-active"
                    data-status="all"
                >

                            <span class="wm-project-summary__icon wm-project-summary__icon--blue">
                                <i class="ph ph-kanban"></i>
                            </span>


                    <span class="wm-project-summary__content">

                                <span class="wm-project-summary__label">
                                    All Projects
                                </span>

                                <strong class="wm-project-summary__value">
                                    24
                                </strong>

                            </span>


                    <span class="wm-project-summary__arrow">
                                <i class="ph ph-arrow-up-right"></i>
                            </span>

                </button>

            </div>


            <!-- Active -->

            <div class="col-12 col-sm-6 col-xl-3">

                <button
                    type="button"
                    class="wm-project-summary"
                    data-status="active"
                >

                            <span class="wm-project-summary__icon wm-project-summary__icon--green">
                                <i class="ph ph-play-circle"></i>
                            </span>


                    <span class="wm-project-summary__content">

                                <span class="wm-project-summary__label">
                                    Active
                                </span>

                                <strong class="wm-project-summary__value">
                                    14
                                </strong>

                            </span>


                    <span class="wm-project-summary__arrow">
                                <i class="ph ph-arrow-up-right"></i>
                            </span>

                </button>

            </div>


            <!-- Completed -->

            <div class="col-12 col-sm-6 col-xl-3">

                <button
                    type="button"
                    class="wm-project-summary"
                    data-status="completed"
                >

                            <span class="wm-project-summary__icon wm-project-summary__icon--purple">
                                <i class="ph ph-check-circle"></i>
                            </span>


                    <span class="wm-project-summary__content">

                                <span class="wm-project-summary__label">
                                    Completed
                                </span>

                                <strong class="wm-project-summary__value">
                                    7
                                </strong>

                            </span>


                    <span class="wm-project-summary__arrow">
                                <i class="ph ph-arrow-up-right"></i>
                            </span>

                </button>

            </div>


            <!-- Archived -->

            <div class="col-12 col-sm-6 col-xl-3">

                <button
                    type="button"
                    class="wm-project-summary"
                    data-status="archived"
                >

                            <span class="wm-project-summary__icon wm-project-summary__icon--gray">
                                <i class="ph ph-archive"></i>
                            </span>


                    <span class="wm-project-summary__content">

                                <span class="wm-project-summary__label">
                                    Archived
                                </span>

                                <strong class="wm-project-summary__value">
                                    3
                                </strong>

                            </span>


                    <span class="wm-project-summary__arrow">
                                <i class="ph ph-arrow-up-right"></i>
                            </span>

                </button>

            </div>

        </div>



        <!-- =================================================
             TOOLBAR
             ================================================= -->

        <div class="wm-projects-toolbar">


            <!-- Search -->

            <div class="wm-projects-toolbar__search wm-search">

                        <span class="wm-search__icon">
                            <i class="ph ph-magnifying-glass"></i>
                        </span>

                <input
                    type="search"
                    class="wm-form-control"
                    id="wm-project-search"
                    placeholder="Search projects..."
                >

            </div>


            <!-- Filters -->

            <div class="wm-projects-toolbar__filters">


                <!-- Status -->

                <div class="wm-select">

                    <select
                        class="wm-form-select"
                        id="wm-project-status"
                    >

                        <option value="all">
                            All Status
                        </option>

                        <option value="active">
                            Active
                        </option>

                        <option value="planning">
                            Planning
                        </option>

                        <option value="completed">
                            Completed
                        </option>

                        <option value="archived">
                            Archived
                        </option>

                    </select>

                </div>


                <!-- Owner -->

                <div class="wm-select">

                    <select
                        class="wm-form-select"
                        id="wm-project-owner"
                    >

                        <option value="all">
                            All Owners
                        </option>

                        <option value="alex">
                            Alex Morgan
                        </option>

                        <option value="john">
                            John Davis
                        </option>

                        <option value="maria">
                            Maria Kim
                        </option>

                        <option value="olivia">
                            Olivia Lee
                        </option>

                    </select>

                </div>


                <!-- Sort -->

                <div class="wm-select">

                    <select
                        class="wm-form-select"
                        id="wm-project-sort"
                    >

                        <option value="recent">
                            Recently Updated
                        </option>

                        <option value="name">
                            Project Name
                        </option>

                        <option value="progress">
                            Progress
                        </option>

                        <option value="due">
                            Due Date
                        </option>

                    </select>

                </div>


            </div>


            <!-- View Switcher -->

            <div class="wm-projects-toolbar__view">

                <div
                    class="wm-btn-group"
                    role="group"
                    aria-label="Project view"
                >

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary wm-btn--icon wm-btn--sm is-active"
                        data-view="grid"
                        aria-label="Grid view"
                        title="Grid view"
                    >

                        <i class="ph ph-squares-four"></i>

                    </button>


                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary wm-btn--icon wm-btn--sm"
                        data-view="list"
                        aria-label="List view"
                        title="List view"
                    >

                        <i class="ph ph-list"></i>

                    </button>

                </div>

            </div>

        </div>



        <!-- =================================================
             PROJECT GRID
             ================================================= -->

        <div
            class="wm-projects-grid"
            id="wm-projects-grid"
        >


            <!-- =================================================
                 Project 1
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="active"
                data-owner="alex"
                data-name="Website Redesign"
                data-progress="72"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--blue">
                        <i class="ph ph-browser"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--success">

                                    <span class="wm-project-status__dot"></span>

                                    Active

                                </span>


                        <span class="wm-project-card__priority">
                                    High
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Website Redesign
                    </h3>


                    <p class="wm-project-card__description">
                        Redesign and modernize the company website with a new visual system.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                72%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--blue"
                                        style="width: 72%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        24 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-blank"></i>

                            <span>
                                        Sep 30
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar">
                                    AM
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--green">
                                    JD
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--purple">
                                    MK
                                </span>

                        <span class="wm-project-card__member-count">
                                    +5
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>



            <!-- =================================================
                 Project 2
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="active"
                data-owner="john"
                data-name="Mobile App"
                data-progress="45"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--purple">
                        <i class="ph ph-device-mobile"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--warning">

                                    <span class="wm-project-status__dot"></span>

                                    In Progress

                                </span>


                        <span class="wm-project-card__priority">
                                    Medium
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Mobile App
                    </h3>


                    <p class="wm-project-card__description">
                        Build a modern mobile application for customers and internal teams.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                45%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--purple"
                                        style="width: 45%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        38 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-blank"></i>

                            <span>
                                        Oct 15
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar">
                                    JD
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--green">
                                    OL
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--orange">
                                    AM
                                </span>

                        <span class="wm-project-card__member-count">
                                    +3
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>



            <!-- =================================================
                 Project 3
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="planning"
                data-owner="maria"
                data-name="Marketing Campaign"
                data-progress="24"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--orange">
                        <i class="ph ph-megaphone"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--info">

                                    <span class="wm-project-status__dot"></span>

                                    Planning

                                </span>


                        <span class="wm-project-card__priority">
                                    Normal
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Marketing Campaign
                    </h3>


                    <p class="wm-project-card__description">
                        Plan and execute the upcoming product marketing campaign.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                24%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--orange"
                                        style="width: 24%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        16 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-blank"></i>

                            <span>
                                        Nov 08
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar wm-project-card__avatar--orange">
                                    MK
                                </span>

                        <span class="wm-project-card__avatar">
                                    AM
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--purple">
                                    OL
                                </span>

                        <span class="wm-project-card__member-count">
                                    +2
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>



            <!-- =================================================
                 Project 4
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="completed"
                data-owner="olivia"
                data-name="Design System"
                data-progress="100"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--green">
                        <i class="ph ph-palette"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--success">

                                    <span class="wm-project-status__dot"></span>

                                    Completed

                                </span>


                        <span class="wm-project-card__priority">
                                    Normal
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Design System
                    </h3>


                    <p class="wm-project-card__description">
                        Create the shared UI foundation and component library for the product.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                100%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--green"
                                        style="width: 100%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        42 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-check"></i>

                            <span>
                                        Sep 18
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar wm-project-card__avatar--purple">
                                    OL
                                </span>

                        <span class="wm-project-card__avatar">
                                    JD
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--green">
                                    MK
                                </span>

                        <span class="wm-project-card__member-count">
                                    +4
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>



            <!-- =================================================
                 Project 5
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="active"
                data-owner="alex"
                data-name="Client Portal"
                data-progress="61"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--cyan">
                        <i class="ph ph-user-circle-gear"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--success">

                                    <span class="wm-project-status__dot"></span>

                                    Active

                                </span>


                        <span class="wm-project-card__priority">
                                    High
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Client Portal
                    </h3>


                    <p class="wm-project-card__description">
                        Develop a centralized portal for client communication and project visibility.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                61%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--cyan"
                                        style="width: 61%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        29 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-blank"></i>

                            <span>
                                        Oct 02
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar">
                                    AM
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--cyan">
                                    MK
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--green">
                                    JD
                                </span>

                        <span class="wm-project-card__member-count">
                                    +6
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>



            <!-- =================================================
                 Project 6
                 ================================================= -->

            <article
                class="wm-project-card"
                data-status="archived"
                data-owner="john"
                data-name="Legacy Migration"
                data-progress="86"
            >

                <div class="wm-project-card__header">

                    <div class="wm-project-card__icon wm-project-card__icon--gray">
                        <i class="ph ph-archive"></i>
                    </div>


                    <div class="wm-project-card__menu">

                        <button
                            type="button"
                            class="wm-project-card__menu-button"
                            aria-label="Project actions"
                        >

                            <i class="ph ph-dots-three"></i>

                        </button>

                    </div>

                </div>


                <div class="wm-project-card__body">

                    <div class="wm-project-card__status">

                                <span class="wm-project-status wm-project-status--gray">

                                    <span class="wm-project-status__dot"></span>

                                    Archived

                                </span>


                        <span class="wm-project-card__priority">
                                    Low
                                </span>

                    </div>


                    <h3 class="wm-project-card__title">
                        Legacy Migration
                    </h3>


                    <p class="wm-project-card__description">
                        Migrate legacy project data into the new WorkManagement platform.
                    </p>


                    <div class="wm-project-card__progress">

                        <div class="wm-project-card__progress-header">

                                    <span>
                                        Progress
                                    </span>

                            <strong>
                                86%
                            </strong>

                        </div>


                        <div class="wm-project-card__progress-bar">

                                    <span
                                        class="wm-project-card__progress-fill wm-project-card__progress-fill--gray"
                                        style="width: 86%;"
                                    ></span>

                        </div>

                    </div>


                    <div class="wm-project-card__meta">

                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-check-square"></i>

                            <span>
                                        18 tasks
                                    </span>

                        </div>


                        <div class="wm-project-card__meta-item">

                            <i class="ph ph-calendar-blank"></i>

                            <span>
                                        Aug 30
                                    </span>

                        </div>

                    </div>

                </div>


                <div class="wm-project-card__footer">

                    <div class="wm-project-card__members">

                                <span class="wm-project-card__avatar">
                                    JD
                                </span>

                        <span class="wm-project-card__avatar wm-project-card__avatar--purple">
                                    OL
                                </span>

                        <span class="wm-project-card__member-count">
                                    +2
                                </span>

                    </div>


                    <button
                        type="button"
                        class="wm-btn wm-btn--ghost wm-btn--sm"
                    >

                        Open

                        <i class="ph ph-arrow-right"></i>

                    </button>

                </div>

            </article>


        </div>



        <!-- =================================================
             EMPTY STATE
             ================================================= -->

        <div
            class="wm-projects-empty"
            id="wm-projects-empty"
            hidden
        >

            <div class="wm-projects-empty__icon">

                <i class="ph ph-folder-dashed"></i>

            </div>


            <h3 class="wm-projects-empty__title">
                No projects found
            </h3>


            <p class="wm-projects-empty__description">
                Try changing your search or filters to find projects.
            </p>


            <button
                type="button"
                class="wm-btn wm-btn--secondary"
                id="wm-clear-project-filters"
            >

                <i class="ph ph-arrow-counter-clockwise"></i>

                Clear Filters

            </button>

        </div>



        <!-- =================================================
             LIST VIEW
             ================================================= -->

        <div
            class="wm-projects-list"
            id="wm-projects-list"
            hidden
        >

            <div class="wm-card">

                <div class="wm-card__body wm-card__body--flush">

                    <div class="wm-table-wrapper">

                        <table class="wm-table wm-project-table">

                            <thead>

                            <tr>

                                <th>
                                    Project
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Owner
                                </th>

                                <th>
                                    Progress
                                </th>

                                <th>
                                    Due Date
                                </th>

                                <th>
                                    Priority
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                            </thead>


                            <tbody>


                            <tr>

                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-browser"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                                    <span class="wm-table__project-name">
                                                        Website Redesign
                                                    </span>

                                            <span class="wm-table__project-meta">
                                                        24 tasks · 8 members
                                                    </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                            <span class="wm-project-status wm-project-status--success">

                                                <span class="wm-project-status__dot"></span>

                                                Active

                                            </span>

                                </td>


                                <td>
                                    Alex Morgan
                                </td>


                                <td>

                                    <div class="wm-project-list-progress">

                                        <div class="wm-project-list-progress__header">

                                                    <span>
                                                        72%
                                                    </span>

                                        </div>

                                        <div class="wm-project-list-progress__bar">

                                                    <span
                                                        style="width: 72%;"
                                                    ></span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    Sep 30
                                </td>


                                <td>

                                            <span class="wm-project-priority wm-project-priority--high">
                                                High
                                            </span>

                                </td>


                                <td>

                                    <button
                                        type="button"
                                        class="wm-table__action"
                                    >

                                        <i class="ph ph-dots-three"></i>

                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-device-mobile"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                                    <span class="wm-table__project-name">
                                                        Mobile App
                                                    </span>

                                            <span class="wm-table__project-meta">
                                                        38 tasks · 6 members
                                                    </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                            <span class="wm-project-status wm-project-status--warning">

                                                <span class="wm-project-status__dot"></span>

                                                In Progress

                                            </span>

                                </td>


                                <td>
                                    John Davis
                                </td>


                                <td>

                                    <div class="wm-project-list-progress">

                                        <div class="wm-project-list-progress__header">

                                                    <span>
                                                        45%
                                                    </span>

                                        </div>

                                        <div class="wm-project-list-progress__bar">

                                                    <span
                                                        style="width: 45%;"
                                                    ></span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    Oct 15
                                </td>


                                <td>

                                            <span class="wm-project-priority wm-project-priority--medium">
                                                Medium
                                            </span>

                                </td>


                                <td>

                                    <button
                                        type="button"
                                        class="wm-table__action"
                                    >

                                        <i class="ph ph-dots-three"></i>

                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-megaphone"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                                    <span class="wm-table__project-name">
                                                        Marketing Campaign
                                                    </span>

                                            <span class="wm-table__project-meta">
                                                        16 tasks · 5 members
                                                    </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                            <span class="wm-project-status wm-project-status--info">

                                                <span class="wm-project-status__dot"></span>

                                                Planning

                                            </span>

                                </td>


                                <td>
                                    Maria Kim
                                </td>


                                <td>

                                    <div class="wm-project-list-progress">

                                        <div class="wm-project-list-progress__header">

                                                    <span>
                                                        24%
                                                    </span>

                                        </div>

                                        <div class="wm-project-list-progress__bar">

                                                    <span
                                                        style="width: 24%;"
                                                    ></span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    Nov 08
                                </td>


                                <td>

                                            <span class="wm-project-priority wm-project-priority--normal">
                                                Normal
                                            </span>

                                </td>


                                <td>

                                    <button
                                        type="button"
                                        class="wm-table__action"
                                    >

                                        <i class="ph ph-dots-three"></i>

                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-palette"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                                    <span class="wm-table__project-name">
                                                        Design System
                                                    </span>

                                            <span class="wm-table__project-meta">
                                                        42 tasks · 7 members
                                                    </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                            <span class="wm-project-status wm-project-status--success">

                                                <span class="wm-project-status__dot"></span>

                                                Completed

                                            </span>

                                </td>


                                <td>
                                    Olivia Lee
                                </td>


                                <td>

                                    <div class="wm-project-list-progress">

                                        <div class="wm-project-list-progress__header">

                                                    <span>
                                                        100%
                                                    </span>

                                        </div>

                                        <div class="wm-project-list-progress__bar">

                                                    <span
                                                        style="width: 100%;"
                                                    ></span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    Sep 18
                                </td>


                                <td>

                                            <span class="wm-project-priority wm-project-priority--normal">
                                                Normal
                                            </span>

                                </td>


                                <td>

                                    <button
                                        type="button"
                                        class="wm-table__action"
                                    >

                                        <i class="ph ph-dots-three"></i>

                                    </button>

                                </td>

                            </tr>


                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>



        <!-- =================================================
             PAGINATION
             ================================================= -->

        <div class="wm-projects-pagination">


            <div class="wm-projects-pagination__info">

                Showing

                <strong>
                    1–6
                </strong>

                of

                <strong>
                    24
                </strong>

                projects

            </div>


            <div class="wm-projects-pagination__actions">


                <button
                    type="button"
                    class="wm-projects-pagination__button"
                    disabled
                >

                    <i class="ph ph-caret-left"></i>

                </button>


                <button
                    type="button"
                    class="wm-projects-pagination__button is-active"
                >
                    1
                </button>


                <button
                    type="button"
                    class="wm-projects-pagination__button"
                >
                    2
                </button>


                <button
                    type="button"
                    class="wm-projects-pagination__button"
                >
                    3
                </button>


                <span class="wm-projects-pagination__dots">
                            ...
                        </span>


                <button
                    type="button"
                    class="wm-projects-pagination__button"
                >
                    4
                </button>


                <button
                    type="button"
                    class="wm-projects-pagination__button"
                >

                    <i class="ph ph-caret-right"></i>

                </button>


            </div>

        </div>


    </div>

@endsection


@push('script')

    <script>

        document.addEventListener('DOMContentLoaded', function () {


            // =========================================================
            // ELEMENTS
            // =========================================================

            const sidebar = document.getElementById('wm-sidebar');

            const sidebarToggle = document.getElementById(
                'wm-sidebar-toggle'
            );

            const sidebarToggleIcon = document.getElementById(
                'wm-sidebar-toggle-icon'
            );

            const mobileToggle = document.getElementById(
                'wm-mobile-sidebar-toggle'
            );


            const projectSearch = document.getElementById(
                'wm-project-search'
            );

            const projectStatus = document.getElementById(
                'wm-project-status'
            );

            const projectOwner = document.getElementById(
                'wm-project-owner'
            );

            const projectSort = document.getElementById(
                'wm-project-sort'
            );


            const projectsGrid = document.getElementById(
                'wm-projects-grid'
            );

            const projectsList = document.getElementById(
                'wm-projects-list'
            );

            const projectsEmpty = document.getElementById(
                'wm-projects-empty'
            );

            const clearFilters = document.getElementById(
                'wm-clear-project-filters'
            );


            const summaryButtons = document.querySelectorAll(
                '.wm-project-summary'
            );

            const viewButtons = document.querySelectorAll(
                '[data-view]'
            );

            const projectCards = document.querySelectorAll(
                '.wm-project-card'
            );


            const mobileBreakpoint = 991;



            // =========================================================
            // SIDEBAR
            // =========================================================

            function updateSidebarToggle() {

                if (!sidebarToggle || !sidebarToggleIcon) {
                    return;
                }


                const isCollapsed =
                    sidebar.classList.contains(
                        'is-collapsed'
                    );


                if (isCollapsed) {

                    sidebarToggle.setAttribute(
                        'aria-label',
                        'Expand sidebar'
                    );

                    sidebarToggle.setAttribute(
                        'title',
                        'Expand sidebar'
                    );

                    sidebarToggle.setAttribute(
                        'aria-expanded',
                        'false'
                    );


                    sidebarToggleIcon.classList.remove(
                        'ph-sidebar-simple'
                    );

                    sidebarToggleIcon.classList.add(
                        'ph-sidebar'
                    );

                } else {

                    sidebarToggle.setAttribute(
                        'aria-label',
                        'Collapse sidebar'
                    );

                    sidebarToggle.setAttribute(
                        'title',
                        'Collapse sidebar'
                    );

                    sidebarToggle.setAttribute(
                        'aria-expanded',
                        'true'
                    );


                    sidebarToggleIcon.classList.remove(
                        'ph-sidebar'
                    );

                    sidebarToggleIcon.classList.add(
                        'ph-sidebar-simple'
                    );

                }

            }


            if (sidebarToggle) {

                sidebarToggle.addEventListener(
                    'click',
                    function () {

                        if (
                            window.innerWidth <=
                            mobileBreakpoint
                        ) {

                            sidebar.classList.remove(
                                'is-open'
                            );

                            return;
                        }


                        sidebar.classList.toggle(
                            'is-collapsed'
                        );


                        updateSidebarToggle();

                    }
                );

            }


            if (mobileToggle) {

                mobileToggle.addEventListener(
                    'click',
                    function () {

                        const isOpen =
                            sidebar.classList.toggle(
                                'is-open'
                            );


                        mobileToggle.setAttribute(
                            'aria-expanded',
                            isOpen ? 'true' : 'false'
                        );

                    }
                );

            }


            document.addEventListener(
                'click',
                function (event) {

                    if (
                        window.innerWidth >
                        mobileBreakpoint
                    ) {
                        return;
                    }


                    if (
                        !sidebar.classList.contains(
                            'is-open'
                        )
                    ) {
                        return;
                    }


                    if (
                        sidebar.contains(
                            event.target
                        )
                    ) {
                        return;
                    }


                    if (
                        mobileToggle &&
                        mobileToggle.contains(
                            event.target
                        )
                    ) {
                        return;
                    }


                    sidebar.classList.remove(
                        'is-open'
                    );


                    if (mobileToggle) {

                        mobileToggle.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                }
            );


            document.addEventListener(
                'keydown',
                function (event) {

                    if (
                        event.key !== 'Escape'
                    ) {
                        return;
                    }


                    sidebar.classList.remove(
                        'is-open'
                    );


                    if (mobileToggle) {

                        mobileToggle.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                }
            );


            window.addEventListener(
                'resize',
                function () {

                    if (
                        window.innerWidth >
                        mobileBreakpoint
                    ) {

                        sidebar.classList.remove(
                            'is-open'
                        );

                    }


                    updateSidebarToggle();

                }
            );


            updateSidebarToggle();



            // =========================================================
            // PROJECT FILTERING
            // =========================================================

            let selectedSummaryStatus = 'all';


            function filterProjects() {

                const searchValue =
                    projectSearch.value
                        .trim()
                        .toLowerCase();


                const statusValue =
                    projectStatus.value;


                const ownerValue =
                    projectOwner.value;


                let visibleCount = 0;


                projectCards.forEach(
                    function (card) {


                        const name =
                            card.dataset.name
                                .toLowerCase();


                        const status =
                            card.dataset.status;


                        const owner =
                            card.dataset.owner;


                        const matchesSearch =
                            !searchValue ||
                            name.includes(
                                searchValue
                            );


                        const matchesStatus =
                            statusValue === 'all' ||
                            status === statusValue;


                        const matchesOwner =
                            ownerValue === 'all' ||
                            owner === ownerValue;


                        const matchesSummary =
                            selectedSummaryStatus === 'all' ||
                            status === selectedSummaryStatus;


                        const visible =
                            matchesSearch &&
                            matchesStatus &&
                            matchesOwner &&
                            matchesSummary;


                        card.hidden = !visible;


                        if (visible) {
                            visibleCount++;
                        }

                    }
                );


                projectsEmpty.hidden =
                    visibleCount !== 0;

            }



            // =========================================================
            // SEARCH
            // =========================================================

            if (projectSearch) {

                projectSearch.addEventListener(
                    'input',
                    filterProjects
                );

            }



            // =========================================================
            // STATUS FILTER
            // =========================================================

            if (projectStatus) {

                projectStatus.addEventListener(
                    'change',
                    function () {

                        selectedSummaryStatus =
                            'all';

                        summaryButtons.forEach(
                            function (button) {

                                button.classList.remove(
                                    'is-active'
                                );

                            }
                        );


                        filterProjects();

                    }
                );

            }



            // =========================================================
            // OWNER FILTER
            // =========================================================

            if (projectOwner) {

                projectOwner.addEventListener(
                    'change',
                    filterProjects
                );

            }



            // =========================================================
            // SORT
            // =========================================================

            if (projectSort) {

                projectSort.addEventListener(
                    'change',
                    function () {

                        const value =
                            projectSort.value;


                        const cards =
                            Array.from(
                                projectCards
                            );


                        cards.sort(
                            function (a, b) {

                                if (
                                    value === 'name'
                                ) {

                                    return a.dataset.name
                                        .localeCompare(
                                            b.dataset.name
                                        );

                                }


                                if (
                                    value === 'progress'
                                ) {

                                    return (
                                        Number(
                                            b.dataset.progress
                                        ) -
                                        Number(
                                            a.dataset.progress
                                        )
                                    );

                                }


                                return 0;

                            }
                        );


                        cards.forEach(
                            function (card) {

                                projectsGrid.appendChild(
                                    card
                                );

                            }
                        );


                        filterProjects();

                    }
                );

            }



            // =========================================================
            // SUMMARY FILTER
            // =========================================================

            summaryButtons.forEach(
                function (button) {

                    button.addEventListener(
                        'click',
                        function () {


                            summaryButtons.forEach(
                                function (item) {

                                    item.classList.remove(
                                        'is-active'
                                    );

                                }
                            );


                            button.classList.add(
                                'is-active'
                            );


                            selectedSummaryStatus =
                                button.dataset.status;


                            if (
                                projectStatus
                            ) {

                                projectStatus.value =
                                    'all';

                            }


                            filterProjects();

                        }
                    );

                }
            );



            // =========================================================
            // VIEW SWITCHER
            // =========================================================

            viewButtons.forEach(
                function (button) {

                    button.addEventListener(
                        'click',
                        function () {

                            const view =
                                button.dataset.view;


                            viewButtons.forEach(
                                function (item) {

                                    item.classList.remove(
                                        'is-active'
                                    );

                                }
                            );


                            button.classList.add(
                                'is-active'
                            );


                            if (
                                view === 'list'
                            ) {

                                projectsGrid.hidden =
                                    true;

                                projectsList.hidden =
                                    false;

                            } else {

                                projectsGrid.hidden =
                                    false;

                                projectsList.hidden =
                                    true;

                            }

                        }
                    );

                }
            );



            // =========================================================
            // CLEAR FILTERS
            // =========================================================

            if (clearFilters) {

                clearFilters.addEventListener(
                    'click',
                    function () {

                        projectSearch.value =
                            '';

                        projectStatus.value =
                            'all';

                        projectOwner.value =
                            'all';

                        selectedSummaryStatus =
                            'all';


                        summaryButtons.forEach(
                            function (button) {

                                button.classList.remove(
                                    'is-active'
                                );

                            }
                        );


                        const allSummary =
                            document.querySelector(
                                '[data-status="all"]'
                            );


                        if (allSummary) {

                            allSummary.classList.add(
                                'is-active'
                            );

                        }


                        filterProjects();

                    }
                );

            }



            // =========================================================
            // CREATE PROJECT
            // =========================================================

            const createProjectButtons =
                document.querySelectorAll(
                    '#wm-create-project, #wm-header-create'
                );


            createProjectButtons.forEach(
                function (button) {

                    button.addEventListener(
                        'click',
                        function () {

                            console.log(
                                'Create project clicked'
                            );

                            // Later:
                            // window.location.href =
                            // '/projects/create';

                        }
                    );

                }
            );



            // =========================================================
            // PROJECT MENU
            // =========================================================

            const projectMenuButtons =
                document.querySelectorAll(
                    '.wm-project-card__menu-button'
                );


            projectMenuButtons.forEach(
                function (button) {

                    button.addEventListener(
                        'click',
                        function (event) {

                            event.stopPropagation();


                            console.log(
                                'Project menu clicked'
                            );

                        }
                    );

                }
            );



            // =========================================================
            // INITIAL FILTER
            // =========================================================

            filterProjects();

        });

    </script>

@endpush

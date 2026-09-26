@extends('layout.app')

@section('main')

    <div class="wm-integrations-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-page-header">

            <div class="wm-page-header__content">

                <div class="wm-page-header__breadcrumb">
                    <a href="{{ route('settings.index') }}">
                        <i class="ph ph-gear"></i>
                        Settings
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Integrations</span>
                </div>

                <h1 class="wm-page-header__title">
                    Integrations
                </h1>

                <p class="wm-page-header__description">
                    Connect WorkManagement with the tools your team already uses
                    to automate workflows and keep everything in sync.
                </p>

            </div>

            <div class="wm-page-header__actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    id="refreshIntegrations"
                >
                    <i class="ph ph-arrows-clockwise"></i>
                    Refresh
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="browseIntegrations"
                >
                    <i class="ph ph-plus"></i>
                    Browse Integrations
                </button>

            </div>

        </div>


        {{-- =========================================================
            Summary Cards
        ========================================================== --}}
        <div class="wm-integration-summary">

            <div class="wm-integration-summary__card">

                <div class="wm-integration-summary__icon wm-integration-summary__icon--primary">
                    <i class="ph ph-plugs-connected"></i>
                </div>

                <div class="wm-integration-summary__content">
                    <span>Connected</span>
                    <strong>4</strong>
                </div>

            </div>


            <div class="wm-integration-summary__card">

                <div class="wm-integration-summary__icon wm-integration-summary__icon--success">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-integration-summary__content">
                    <span>Active</span>
                    <strong>4</strong>
                </div>

            </div>


            <div class="wm-integration-summary__card">

                <div class="wm-integration-summary__icon wm-integration-summary__icon--warning">
                    <i class="ph ph-clock"></i>
                </div>

                <div class="wm-integration-summary__content">
                    <span>Pending Setup</span>
                    <strong>2</strong>
                </div>

            </div>


            <div class="wm-integration-summary__card">

                <div class="wm-integration-summary__icon wm-integration-summary__icon--purple">
                    <i class="ph ph-stack"></i>
                </div>

                <div class="wm-integration-summary__content">
                    <span>Available</span>
                    <strong>12</strong>
                </div>

            </div>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-integrations-toolbar">

            <div class="wm-integrations-toolbar__left">

                <div class="wm-search-box">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="integrationSearch"
                        placeholder="Search integrations..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-search-box__clear"
                        id="clearIntegrationSearch"
                        aria-label="Clear search"
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>

            </div>


            <div class="wm-integrations-toolbar__right">

                <div class="wm-integration-view-toggle">

                    <button
                        type="button"
                        class="is-active"
                        data-integration-view="grid"
                        aria-label="Grid view"
                    >
                        <i class="ph ph-squares-four"></i>
                    </button>

                    <button
                        type="button"
                        data-integration-view="list"
                        aria-label="List view"
                    >
                        <i class="ph ph-list"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Category Navigation
        ========================================================== --}}
        <div class="wm-integration-categories">

            <button
                type="button"
                class="wm-integration-category is-active"
                data-integration-category="all"
            >
                All
                <span>12</span>
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="communication"
            >
                <i class="ph ph-chat-circle"></i>
                Communication
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="storage"
            >
                <i class="ph ph-cloud"></i>
                Storage
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="development"
            >
                <i class="ph ph-git-branch"></i>
                Development
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="calendar"
            >
                <i class="ph ph-calendar"></i>
                Calendar
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="productivity"
            >
                <i class="ph ph-lightning"></i>
                Productivity
            </button>

            <button
                type="button"
                class="wm-integration-category"
                data-integration-category="automation"
            >
                <i class="ph ph-flow-arrow"></i>
                Automation
            </button>

        </div>


        {{-- =========================================================
            Connected Integrations
        ========================================================== --}}
        <section class="wm-integrations-section">

            <div class="wm-integrations-section__header">

                <div>
                    <h2>Connected Integrations</h2>

                    <p>
                        Integrations currently connected to this workspace.
                    </p>
                </div>

                <span class="wm-integration-count">
                4 connected
            </span>

            </div>


            <div class="wm-integrations-grid" id="integrationGrid">


                {{-- Slack --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Slack"
                    data-category="communication"
                    data-status="connected"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--slack">
                            <i class="ph ph-slack-logo"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--connected">
                        <i class="ph ph-check-circle"></i>
                        Connected
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Slack</h3>

                        <p>
                            Send project notifications and task updates
                            directly to your Slack channels.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-chat-circle"></i>
                        Communication
                    </span>

                        <span>
                        Connected 2 days ago
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light wm-btn--sm"
                            data-integration-action="configure"
                            data-integration-name="Slack"
                        >
                            <i class="ph ph-gear"></i>
                            Configure
                        </button>

                        <button
                            type="button"
                            class="wm-integration-more"
                            data-integration-menu
                            aria-label="More actions"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-integration-menu">

                            <button
                                type="button"
                                data-menu-action="details"
                            >
                                <i class="ph ph-eye"></i>
                                View Details
                            </button>

                            <button
                                type="button"
                                data-menu-action="settings"
                            >
                                <i class="ph ph-gear"></i>
                                Settings
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-menu-action="disconnect"
                            >
                                <i class="ph ph-plugs"></i>
                                Disconnect
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Google Drive --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Google Drive"
                    data-category="storage"
                    data-status="connected"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--drive">
                            <i class="ph ph-google-drive-logo"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--connected">
                        <i class="ph ph-check-circle"></i>
                        Connected
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Google Drive</h3>

                        <p>
                            Attach and manage project files stored
                            in Google Drive.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-cloud"></i>
                        Storage
                    </span>

                        <span>
                        Connected 5 days ago
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light wm-btn--sm"
                            data-integration-action="configure"
                            data-integration-name="Google Drive"
                        >
                            <i class="ph ph-gear"></i>
                            Configure
                        </button>

                        <button
                            type="button"
                            class="wm-integration-more"
                            data-integration-menu
                            aria-label="More actions"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-integration-menu">

                            <button type="button" data-menu-action="details">
                                <i class="ph ph-eye"></i>
                                View Details
                            </button>

                            <button type="button" data-menu-action="settings">
                                <i class="ph ph-gear"></i>
                                Settings
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-menu-action="disconnect"
                            >
                                <i class="ph ph-plugs"></i>
                                Disconnect
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Google Calendar --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Google Calendar"
                    data-category="calendar"
                    data-status="connected"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--calendar">
                            <i class="ph ph-calendar-blank"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--connected">
                        <i class="ph ph-check-circle"></i>
                        Connected
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Google Calendar</h3>

                        <p>
                            Sync project milestones, deadlines and
                            meetings with your calendar.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-calendar"></i>
                        Calendar
                    </span>

                        <span>
                        Connected 1 week ago
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light wm-btn--sm"
                            data-integration-action="configure"
                            data-integration-name="Google Calendar"
                        >
                            <i class="ph ph-gear"></i>
                            Configure
                        </button>

                        <button
                            type="button"
                            class="wm-integration-more"
                            data-integration-menu
                            aria-label="More actions"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-integration-menu">

                            <button type="button" data-menu-action="details">
                                <i class="ph ph-eye"></i>
                                View Details
                            </button>

                            <button type="button" data-menu-action="settings">
                                <i class="ph ph-gear"></i>
                                Settings
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-menu-action="disconnect"
                            >
                                <i class="ph ph-plugs"></i>
                                Disconnect
                            </button>

                        </div>

                    </div>

                </article>


                {{-- GitHub --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="GitHub"
                    data-category="development"
                    data-status="connected"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--github">
                            <i class="ph ph-github-logo"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--connected">
                        <i class="ph ph-check-circle"></i>
                        Connected
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>GitHub</h3>

                        <p>
                            Link repositories, issues and pull requests
                            to your research projects.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-git-branch"></i>
                        Development
                    </span>

                        <span>
                        Connected 2 weeks ago
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light wm-btn--sm"
                            data-integration-action="configure"
                            data-integration-name="GitHub"
                        >
                            <i class="ph ph-gear"></i>
                            Configure
                        </button>

                        <button
                            type="button"
                            class="wm-integration-more"
                            data-integration-menu
                            aria-label="More actions"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-integration-menu">

                            <button type="button" data-menu-action="details">
                                <i class="ph ph-eye"></i>
                                View Details
                            </button>

                            <button type="button" data-menu-action="settings">
                                <i class="ph ph-gear"></i>
                                Settings
                            </button>

                            <button
                                type="button"
                                class="is-danger"
                                data-menu-action="disconnect"
                            >
                                <i class="ph ph-plugs"></i>
                                Disconnect
                            </button>

                        </div>

                    </div>

                </article>

            </div>

        </section>


        {{-- =========================================================
            Available Integrations
        ========================================================== --}}
        <section class="wm-integrations-section">

            <div class="wm-integrations-section__header">

                <div>
                    <h2>Available Integrations</h2>

                    <p>
                        Extend your workspace with additional tools and services.
                    </p>
                </div>

            </div>


            <div class="wm-integrations-grid" id="availableIntegrations">


                {{-- Microsoft Teams --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Microsoft Teams"
                    data-category="communication"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--teams">
                            <i class="ph ph-microsoft-teams-logo"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Microsoft Teams</h3>

                        <p>
                            Receive project updates and collaborate
                            with your team in Microsoft Teams.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-chat-circle"></i>
                        Communication
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Microsoft Teams"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>


                {{-- Dropbox --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Dropbox"
                    data-category="storage"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--dropbox">
                            <i class="ph ph-dropbox-logo"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Dropbox</h3>

                        <p>
                            Connect Dropbox to access and attach files
                            from your workspace.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-cloud"></i>
                        Storage
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Dropbox"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>


                {{-- Notion --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Notion"
                    data-category="productivity"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--notion">
                            <span>N</span>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Notion</h3>

                        <p>
                            Link project documentation and knowledge
                            from your Notion workspace.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-lightning"></i>
                        Productivity
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Notion"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>


                {{-- Zapier --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Zapier"
                    data-category="automation"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--zapier">
                            <i class="ph ph-lightning"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Zapier</h3>

                        <p>
                            Automate repetitive workflows by connecting
                            WorkManagement with thousands of apps.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-flow-arrow"></i>
                        Automation
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Zapier"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>


                {{-- Microsoft Outlook --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Microsoft Outlook"
                    data-category="calendar"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--outlook">
                            <i class="ph ph-envelope"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Microsoft Outlook</h3>

                        <p>
                            Sync tasks, deadlines and project events
                            with Outlook Calendar.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-calendar"></i>
                        Calendar
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Microsoft Outlook"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>


                {{-- Linear --}}
                <article
                    class="wm-integration-card"
                    data-integration
                    data-name="Linear"
                    data-category="development"
                    data-status="available"
                >

                    <div class="wm-integration-card__top">

                        <div class="wm-integration-card__logo wm-integration-card__logo--linear">
                            <i class="ph ph-circle"></i>
                        </div>

                        <span class="wm-integration-status wm-integration-status--available">
                        Available
                    </span>

                    </div>

                    <div class="wm-integration-card__content">

                        <h3>Linear</h3>

                        <p>
                            Sync engineering issues and project tasks
                            with your development workflow.
                        </p>

                    </div>

                    <div class="wm-integration-card__meta">

                    <span>
                        <i class="ph ph-git-branch"></i>
                        Development
                    </span>

                    </div>

                    <div class="wm-integration-card__actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary wm-btn--sm"
                            data-integration-action="connect"
                            data-integration-name="Linear"
                        >
                            <i class="ph ph-plug"></i>
                            Connect
                        </button>

                    </div>

                </article>

            </div>


            {{-- Empty State --}}
            <div
                class="wm-integrations-empty"
                id="integrationsEmpty"
            >
                <div class="wm-integrations-empty__icon">
                    <i class="ph ph-plugs"></i>
                </div>

                <h3>No integrations found</h3>

                <p>
                    Try changing your search or category filter.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    id="clearIntegrationFilters"
                >
                    Clear Filters
                </button>
            </div>

        </section>


        {{-- =========================================================
            Integration Modal
        ========================================================== --}}
        <div
            class="modal fade wm-integration-modal"
            id="integrationModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div class="wm-integration-modal__title">

                            <div
                                class="wm-integration-modal__logo"
                                id="modalIntegrationLogo"
                            >
                                <i class="ph ph-plugs"></i>
                            </div>

                            <div>
                                <h5 id="modalIntegrationName">
                                    Integration
                                </h5>

                                <span id="modalIntegrationCategory">
                                Integration
                            </span>
                            </div>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="wm-integration-modal__description">
                            <p id="modalIntegrationDescription">
                                Configure this integration for your workspace.
                            </p>
                        </div>


                        <div class="wm-modal-form">

                            <div class="wm-form-group">

                                <label for="integrationWorkspace">
                                    Workspace
                                </label>

                                <select
                                    id="integrationWorkspace"
                                    class="wm-form-control"
                                >
                                    <option selected>
                                        ResearchOS
                                    </option>

                                    <option>
                                        Climate Research
                                    </option>
                                </select>

                            </div>


                            <div class="wm-form-group">

                                <label for="integrationChannel">
                                    Default Channel
                                </label>

                                <input
                                    type="text"
                                    id="integrationChannel"
                                    class="wm-form-control"
                                    placeholder="#research-updates"
                                >

                            </div>


                            <div class="wm-form-group">

                                <label class="wm-modal-toggle">

                                <span>
                                    <strong>Project Notifications</strong>
                                    <small>
                                        Send project activity notifications.
                                    </small>
                                </span>

                                    <span class="wm-switch">
                                    <input
                                        type="checkbox"
                                        id="integrationProjectNotifications"
                                        checked
                                    >
                                    <span></span>
                                </span>

                                </label>

                            </div>


                            <div class="wm-form-group">

                                <label class="wm-modal-toggle">

                                <span>
                                    <strong>Task Notifications</strong>
                                    <small>
                                        Send task and deadline notifications.
                                    </small>
                                </span>

                                    <span class="wm-switch">
                                    <input
                                        type="checkbox"
                                        id="integrationTaskNotifications"
                                        checked
                                    >
                                    <span></span>
                                </span>

                                </label>

                            </div>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="wm-btn wm-btn--light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary"
                            id="saveIntegrationSettings"
                        >
                            <i class="ph ph-check"></i>
                            Save Settings
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

            /* -------------------------------------------------------
             * Elements
             * ----------------------------------------------------- */

            const $page = $('.wm-integrations-page');
            const $search = $('#integrationSearch');
            const $clearSearch = $('#clearIntegrationSearch');
            const $categories = $('[data-integration-category]');
            const $cards = $('[data-integration]');
            const $emptyState = $('#integrationsEmpty');

            let activeCategory = 'all';
            let searchTerm = '';

            let selectedIntegration = null;

            const integrationModalElement =
                document.getElementById('integrationModal');

            const integrationModal =
                integrationModalElement
                    ? new bootstrap.Modal(integrationModalElement)
                    : null;


            /* -------------------------------------------------------
             * Integration Data
             * ----------------------------------------------------- */

            const integrationData = {

                'Slack': {
                    category: 'Communication',
                    description:
                        'Send project notifications and task updates directly to your Slack channels.',
                    icon: 'ph-slack-logo'
                },

                'Google Drive': {
                    category: 'Storage',
                    description:
                        'Attach and manage project files stored in Google Drive.',
                    icon: 'ph-google-drive-logo'
                },

                'Google Calendar': {
                    category: 'Calendar',
                    description:
                        'Sync project milestones, deadlines and meetings with your calendar.',
                    icon: 'ph-calendar-blank'
                },

                'GitHub': {
                    category: 'Development',
                    description:
                        'Link repositories, issues and pull requests to your research projects.',
                    icon: 'ph-github-logo'
                },

                'Microsoft Teams': {
                    category: 'Communication',
                    description:
                        'Receive project updates and collaborate with your team in Microsoft Teams.',
                    icon: 'ph-microsoft-teams-logo'
                },

                'Dropbox': {
                    category: 'Storage',
                    description:
                        'Connect Dropbox to access and attach files from your workspace.',
                    icon: 'ph-dropbox-logo'
                },

                'Notion': {
                    category: 'Productivity',
                    description:
                        'Link project documentation and knowledge from your Notion workspace.',
                    icon: 'ph-notebook'
                },

                'Zapier': {
                    category: 'Automation',
                    description:
                        'Automate repetitive workflows by connecting WorkManagement with thousands of apps.',
                    icon: 'ph-lightning'
                },

                'Microsoft Outlook': {
                    category: 'Calendar',
                    description:
                        'Sync tasks, deadlines and project events with Outlook Calendar.',
                    icon: 'ph-envelope'
                },

                'Linear': {
                    category: 'Development',
                    description:
                        'Sync engineering issues and project tasks with your development workflow.',
                    icon: 'ph-circle'
                }

            };


            /* -------------------------------------------------------
             * Functions
             * ----------------------------------------------------- */

            function normalize(value) {
                return String(value || '')
                    .toLowerCase()
                    .trim();
            }


            function filterIntegrations() {

                let visibleCount = 0;

                $cards.each(function () {

                    const $card = $(this);

                    const name = normalize($card.data('name'));
                    const category = normalize($card.data('category'));

                    const matchesSearch =
                        !searchTerm ||
                        name.indexOf(searchTerm) !== -1;

                    const matchesCategory =
                        activeCategory === 'all' ||
                        category === activeCategory;

                    if (matchesSearch && matchesCategory) {

                        $card.removeClass('is-hidden');

                        visibleCount++;

                    } else {

                        $card.addClass('is-hidden');

                    }

                });

                if (visibleCount === 0) {
                    $emptyState.addClass('is-visible');
                } else {
                    $emptyState.removeClass('is-visible');
                }

                updateClearButton();
            }


            function updateClearButton() {

                if (searchTerm) {
                    $clearSearch.addClass('is-visible');
                } else {
                    $clearSearch.removeClass('is-visible');
                }
            }


            function clearFilters() {

                searchTerm = '';
                activeCategory = 'all';

                $search.val('');

                $categories.removeClass('is-active');

                $categories
                    .filter('[data-integration-category="all"]')
                    .addClass('is-active');

                filterIntegrations();
            }


            function openIntegrationModal(name) {

                selectedIntegration = name;

                const data = integrationData[name];

                if (!data || !integrationModal) {
                    return;
                }

                $('#modalIntegrationName').text(name);

                $('#modalIntegrationCategory')
                    .text(data.category);

                $('#modalIntegrationDescription')
                    .text(data.description);

                $('#modalIntegrationLogo').html(
                    '<i class="ph ' + data.icon + '"></i>'
                );

                integrationModal.show();
            }


            function connectIntegration(name) {

                Swal.fire({
                    icon: 'question',
                    title: 'Connect ' + name + '?',
                    text: 'You will be redirected to authorize this integration.',
                    showCancelButton: true,
                    confirmButtonText: 'Continue',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then(function (result) {

                    if (!result.isConfirmed) {
                        return;
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Connection started',
                        text: name + ' is ready for authorization.',
                        confirmButtonText: 'Continue'
                    });

                });
            }


            function disconnectIntegration(name) {

                Swal.fire({
                    icon: 'warning',
                    title: 'Disconnect ' + name + '?',
                    text:
                        'Existing automation and notification settings for this integration will be disabled.',
                    showCancelButton: true,
                    confirmButtonText: 'Disconnect',
                    cancelButtonText: 'Keep Connected',
                    confirmButtonColor: '#EF4444',
                    reverseButtons: true
                }).then(function (result) {

                    if (!result.isConfirmed) {
                        return;
                    }

                    const $card = $cards.filter(
                        '[data-name="' + name + '"]'
                    );

                    $card
                        .attr('data-status', 'available')
                        .find('.wm-integration-status')
                        .removeClass('wm-integration-status--connected')
                        .addClass('wm-integration-status--available')
                        .html('Available');

                    $card
                        .find('[data-integration-action="configure"]')
                        .removeClass('wm-btn--light')
                        .addClass('wm-btn--primary')
                        .attr('data-integration-action', 'connect')
                        .html(
                            '<i class="ph ph-plug"></i> Connect'
                        );

                    Swal.fire({
                        icon: 'success',
                        title: 'Disconnected',
                        text: name + ' has been disconnected.',
                        timer: 1600,
                        showConfirmButton: false
                    });

                });
            }


            function handleMenuAction(action, name) {

                $('.wm-integration-menu').removeClass('is-open');

                if (action === 'details') {

                    openIntegrationModal(name);

                    return;
                }

                if (action === 'settings') {

                    openIntegrationModal(name);

                    return;
                }

                if (action === 'disconnect') {

                    disconnectIntegration(name);

                }
            }


            /* -------------------------------------------------------
             * Search
             * ----------------------------------------------------- */

            $search.on('input', function () {

                searchTerm = normalize($(this).val());

                filterIntegrations();
            });


            $clearSearch.on('click', function () {

                $search.val('');

                searchTerm = '';

                filterIntegrations();

                $search.trigger('focus');
            });


            /* -------------------------------------------------------
             * Categories
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-integration-category]',
                function () {

                    activeCategory =
                        normalize($(this).data('integration-category'));

                    $categories.removeClass('is-active');

                    $(this).addClass('is-active');

                    filterIntegrations();
                }
            );


            /* -------------------------------------------------------
             * Integration Actions
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-integration-action]',
                function () {

                    const action = $(this).data('integration-action');

                    const name = $(this).data('integration-name');

                    if (action === 'connect') {

                        connectIntegration(name);

                        return;
                    }

                    if (action === 'configure') {

                        openIntegrationModal(name);

                    }

                }
            );


            /* -------------------------------------------------------
             * More Menu
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-integration-menu]',
                function (event) {

                    event.stopPropagation();

                    const $menu = $(this)
                        .siblings('.wm-integration-menu');

                    $('.wm-integration-menu')
                        .not($menu)
                        .removeClass('is-open');

                    $menu.toggleClass('is-open');
                }
            );


            $(document).on(
                'click',
                '[data-menu-action]',
                function () {

                    const action = $(this).data('menu-action');

                    const name = $(this)
                        .closest('[data-integration]')
                        .data('name');

                    handleMenuAction(action, name);
                }
            );


            $(document).on('click', function () {

                $('.wm-integration-menu')
                    .removeClass('is-open');

            });


            /* -------------------------------------------------------
             * Clear Filters
             * ----------------------------------------------------- */

            $('#clearIntegrationFilters').on('click', function () {

                clearFilters();
            });


            /* -------------------------------------------------------
             * View Switcher
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-integration-view]',
                function () {

                    const view =
                        $(this).data('integration-view');

                    $('[data-integration-view]')
                        .removeClass('is-active');

                    $(this).addClass('is-active');

                    if (view === 'list') {

                        $page.addClass('is-list-view');

                    } else {

                        $page.removeClass('is-list-view');

                    }
                }
            );


            /* -------------------------------------------------------
             * Browse Integrations
             * ----------------------------------------------------- */

            $('#browseIntegrations').on('click', function () {

                $('html, body').animate({
                    scrollTop: $('#availableIntegrations').offset().top - 120
                }, 300);

            });


            /* -------------------------------------------------------
             * Refresh
             * ----------------------------------------------------- */

            $('#refreshIntegrations').on('click', function () {

                const $button = $(this);

                $button.prop('disabled', true);

                $button.find('i')
                    .addClass('wm-icon-spin');

                setTimeout(function () {

                    $button.prop('disabled', false);

                    $button.find('i')
                        .removeClass('wm-icon-spin');

                    Swal.fire({
                        icon: 'success',
                        title: 'Integrations refreshed',
                        text: 'Integration status is up to date.',
                        timer: 1500,
                        showConfirmButton: false
                    });

                }, 700);

            });


            /* -------------------------------------------------------
             * Save Modal Settings
             * ----------------------------------------------------- */

            $('#saveIntegrationSettings').on('click', function () {

                const name = selectedIntegration;

                if (!name) {
                    return;
                }

                const payload = {
                    integration: name,
                    workspace: $('#integrationWorkspace').val(),
                    channel: $('#integrationChannel').val(),
                    project_notifications:
                        $('#integrationProjectNotifications').is(':checked'),
                    task_notifications:
                        $('#integrationTaskNotifications').is(':checked')
                };

                console.log(
                    'Integration settings payload:',
                    payload
                );

                /*
                 * Future AJAX:
                 *
                 * $.ajax({
                 *     url: '/settings/integrations/' + name,
                 *     method: 'PUT',
                 *     data: payload,
                 *     headers: {
                 *         'X-CSRF-TOKEN':
                 *             $('meta[name="csrf-token"]').attr('content')
                 *     },
                 *     success: function () {}
                 * });
                 */

                integrationModal.hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Settings saved',
                    text: name + ' settings have been updated.',
                    timer: 1600,
                    showConfirmButton: false
                });

            });


            /* -------------------------------------------------------
             * Escape
             * ----------------------------------------------------- */

            $(document).on('keydown', function (event) {

                if (event.key === 'Escape') {

                    $('.wm-integration-menu')
                        .removeClass('is-open');

                }

            });


            /* -------------------------------------------------------
             * Initial
             * ----------------------------------------------------- */

            filterIntegrations();

        });
    </script>
@endpush

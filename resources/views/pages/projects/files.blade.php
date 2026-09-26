@extends('layout.app')

@section('main')

    <div class="wm-project-files-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-files-page__header">

            <div class="wm-project-files-page__header-left">

                <nav class="wm-project-files-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Files</span>

                </nav>

                <div class="wm-project-files-page__title-row">

                    <div class="wm-project-files-page__title-icon">
                        <i class="ph ph-folder-open"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-files-page__title">
                            Project Files
                        </h1>

                        <p class="wm-project-files-page__subtitle">
                            Manage research files, datasets, documents, and project resources.
                        </p>

                    </div>

                </div>

            </div>


            <div class="wm-project-files-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="new-folder"
                >
                    <i class="ph ph-folder-plus"></i>
                    New Folder
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                    data-header-action="upload"
                >
                    <i class="ph ph-upload-simple"></i>
                    Upload Files
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-files-page__navigation">

            <nav class="wm-project-files-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-files-page__nav-item is-active"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-files-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-files-page__summary">

            <button
                type="button"
                class="wm-project-files-page__summary-card is-active"
                data-summary-filter="all"
            >

                <span class="wm-project-files-page__summary-icon wm-project-files-page__summary-icon--blue">
                    <i class="ph ph-files"></i>
                </span>

                <span class="wm-project-files-page__summary-content">
                    <span>Total Files</span>
                    <strong>128</strong>
                    <small>Project resources</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-files-page__summary-card"
                data-summary-filter="folders"
            >

                <span class="wm-project-files-page__summary-icon wm-project-files-page__summary-icon--yellow">
                    <i class="ph ph-folder"></i>
                </span>

                <span class="wm-project-files-page__summary-content">
                    <span>Folders</span>
                    <strong>12</strong>
                    <small>Organized folders</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-files-page__summary-card"
                data-summary-filter="storage"
            >

                <span class="wm-project-files-page__summary-icon wm-project-files-page__summary-icon--purple">
                    <i class="ph ph-hard-drives"></i>
                </span>

                <span class="wm-project-files-page__summary-content">
                    <span>Storage Used</span>
                    <strong>8.4 GB</strong>
                    <small>Of 25 GB available</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-files-page__summary-card"
                data-summary-filter="recent"
            >

                <span class="wm-project-files-page__summary-icon wm-project-files-page__summary-icon--green">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </span>

                <span class="wm-project-files-page__summary-content">
                    <span>Recent Uploads</span>
                    <strong>18</strong>
                    <small>Last 7 days</small>
                </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-files-page__toolbar">

            <div class="wm-project-files-page__toolbar-left">

                <div class="wm-project-files-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectFilesSearch"
                        placeholder="Search files and folders..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-files-page__search-clear"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-files-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-files-page__toolbar-right">

                <div class="wm-project-files-page__sort">

                    <button
                        type="button"
                        class="wm-project-files-page__toolbar-button"
                        data-sort-toggle
                    >
                        <i class="ph ph-sort-ascending"></i>
                        Sort
                        <i class="ph ph-caret-down"></i>
                    </button>

                    <div
                        class="wm-project-files-page__sort-menu"
                        data-sort-menu
                    >

                        <button type="button" data-sort="name">
                            <i class="ph ph-text-aa"></i>
                            Name
                        </button>

                        <button type="button" data-sort="modified">
                            <i class="ph ph-clock"></i>
                            Modified
                        </button>

                        <button type="button" data-sort="size">
                            <i class="ph ph-arrows-out"></i>
                            Size
                        </button>

                        <button type="button" data-sort="type">
                            <i class="ph ph-file"></i>
                            File Type
                        </button>

                    </div>

                </div>


                <div class="wm-project-files-page__view-switcher">

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
            class="wm-project-files-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-files-page__filter-field">

                <label for="fileTypeFilter">
                    Type
                </label>

                <select id="fileTypeFilter">

                    <option value="">All Types</option>
                    <option value="pdf">PDF</option>
                    <option value="doc">Document</option>
                    <option value="sheet">Spreadsheet</option>
                    <option value="image">Image</option>
                    <option value="dataset">Dataset</option>
                    <option value="presentation">Presentation</option>

                </select>

            </div>


            <div class="wm-project-files-page__filter-field">

                <label for="fileOwnerFilter">
                    Owner
                </label>

                <select id="fileOwnerFilter">

                    <option value="">All Owners</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>

                </select>

            </div>


            <div class="wm-project-files-page__filter-field">

                <label for="fileFolderFilter">
                    Folder
                </label>

                <select id="fileFolderFilter">

                    <option value="">All Folders</option>
                    <option value="research">Research Planning</option>
                    <option value="field">Field Data</option>
                    <option value="analysis">Data Analysis</option>
                    <option value="reports">Reports</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-files-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-files-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            Bulk Actions
        ========================================================== --}}
        <div
            class="wm-project-files-page__bulk-bar"
            data-bulk-bar
        >

            <div class="wm-project-files-page__bulk-left">

                <button
                    type="button"
                    class="wm-project-files-page__bulk-close"
                    data-clear-selection
                >
                    <i class="ph ph-x"></i>
                </button>

                <strong>
                    <span data-selected-count>0</span>
                    selected
                </strong>

            </div>


            <div class="wm-project-files-page__bulk-actions">

                <button type="button" data-bulk-action="download">
                    <i class="ph ph-download-simple"></i>
                    Download
                </button>

                <button type="button" data-bulk-action="move">
                    <i class="ph ph-folder-notch-open"></i>
                    Move
                </button>

                <button type="button" data-bulk-action="share">
                    <i class="ph ph-share-network"></i>
                    Share
                </button>

                <button
                    type="button"
                    class="is-danger"
                    data-bulk-action="delete"
                >
                    <i class="ph ph-trash"></i>
                    Delete
                </button>

            </div>

        </div>


        {{-- =========================================================
            LIST VIEW
        ========================================================== --}}
        <div
            class="wm-project-files-page__list-view is-visible"
            data-list-view
        >

            <div class="wm-project-files-page__table-card">

                <div class="wm-project-files-page__table-wrap">

                    <table class="wm-project-files-page__table">

                        <thead>

                        <tr>

                            <th class="wm-project-files-page__check-column">

                                <label class="wm-project-files-page__checkbox">

                                    <input
                                        type="checkbox"
                                        id="selectAllFiles"
                                    >

                                    <span></span>

                                </label>

                            </th>

                            <th>Name</th>
                            <th>Owner</th>
                            <th>Folder</th>
                            <th>Size</th>
                            <th>Modified</th>
                            <th>Version</th>
                            <th></th>

                        </tr>

                        </thead>


                        <tbody data-file-list>


                        {{-- Folder --}}
                        <tr
                            data-file-item
                            data-item-type="folder"
                            data-name="Research Planning"
                            data-owner="sarah"
                            data-folder="research"
                            data-file-type="folder"
                            data-size="24"
                            data-modified="2026-09-20"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="research-planning"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-folder">
                                            <i class="ph ph-folder"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Research Planning
                                        </strong>

                                        <span>
                                                Folder · 24 files
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar">
                                            SW
                                        </span>

                                    <span>
                                            Dr. Sarah Wilson
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Project Root
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__muted">
                                        —
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 20, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__muted">
                                        —
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="open">
                                            <i class="ph ph-folder-open"></i>
                                            Open
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- PDF --}}
                        <tr
                            data-file-item
                            data-item-type="file"
                            data-name="Research Methodology.pdf"
                            data-owner="sarah"
                            data-folder="research"
                            data-file-type="pdf"
                            data-size="18"
                            data-modified="2026-09-18"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="methodology"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-pdf">
                                            <i class="ph ph-file-pdf"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Research Methodology.pdf
                                        </strong>

                                        <span>
                                                PDF Document
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar">
                                            SW
                                        </span>

                                    <span>
                                            Dr. Sarah Wilson
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Research Planning
                                    </span>
                            </td>

                            <td>
                                2.8 MB
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 18, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__version">
                                        v2.1
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="move">
                                            <i class="ph ph-folder-notch-open"></i>
                                            Move
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="versions">
                                            <i class="ph ph-clock-counter-clockwise"></i>
                                            Version History
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Dataset --}}
                        <tr
                            data-file-item
                            data-item-type="file"
                            data-name="Coastal Samples Dataset.csv"
                            data-owner="michael"
                            data-folder="field"
                            data-file-type="dataset"
                            data-size="842"
                            data-modified="2026-09-17"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="coastal-dataset"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-dataset">
                                            <i class="ph ph-database"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Coastal Samples Dataset.csv
                                        </strong>

                                        <span>
                                                Dataset · CSV
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar is-green">
                                            MJ
                                        </span>

                                    <span>
                                            Michael Johnson
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Field Data
                                    </span>
                            </td>

                            <td>
                                842 MB
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 17, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__version">
                                        v4.0
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="move">
                                            <i class="ph ph-folder-notch-open"></i>
                                            Move
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="versions">
                                            <i class="ph ph-clock-counter-clockwise"></i>
                                            Version History
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Spreadsheet --}}
                        <tr
                            data-file-item
                            data-item-type="file"
                            data-name="Field Observation Log.xlsx"
                            data-owner="michael"
                            data-folder="field"
                            data-file-type="sheet"
                            data-size="6"
                            data-modified="2026-09-16"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="field-log"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-sheet">
                                            <i class="ph ph-file-xls"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Field Observation Log.xlsx
                                        </strong>

                                        <span>
                                                Spreadsheet · Excel
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar is-green">
                                            MJ
                                        </span>

                                    <span>
                                            Michael Johnson
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Field Data
                                    </span>
                            </td>

                            <td>
                                6.4 MB
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 16, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__version">
                                        v3.2
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="move">
                                            <i class="ph ph-folder-notch-open"></i>
                                            Move
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="versions">
                                            <i class="ph ph-clock-counter-clockwise"></i>
                                            Version History
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Image --}}
                        <tr
                            data-file-item
                            data-item-type="file"
                            data-name="Coastal Survey Map.png"
                            data-owner="anna"
                            data-folder="analysis"
                            data-file-type="image"
                            data-size="14"
                            data-modified="2026-09-15"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="survey-map"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-image">
                                            <i class="ph ph-image"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Coastal Survey Map.png
                                        </strong>

                                        <span>
                                                Image · PNG
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar is-purple">
                                            AK
                                        </span>

                                    <span>
                                            Anna Kim
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Data Analysis
                                    </span>
                            </td>

                            <td>
                                14.2 MB
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 15, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__version">
                                        v1.0
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="move">
                                            <i class="ph ph-folder-notch-open"></i>
                                            Move
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="versions">
                                            <i class="ph ph-clock-counter-clockwise"></i>
                                            Version History
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Presentation --}}
                        <tr
                            data-file-item
                            data-item-type="file"
                            data-name="Stakeholder Presentation.pptx"
                            data-owner="sarah"
                            data-folder="reports"
                            data-file-type="presentation"
                            data-size="12"
                            data-modified="2026-09-14"
                        >

                            <td></td>

                            <td>

                                <div class="wm-project-files-page__file">

                                    <label class="wm-project-files-page__checkbox">

                                        <input
                                            type="checkbox"
                                            class="file-checkbox"
                                            value="stakeholder-presentation"
                                        >

                                        <span></span>

                                    </label>

                                    <span class="wm-project-files-page__file-icon is-presentation">
                                            <i class="ph ph-file-ppt"></i>
                                        </span>

                                    <div class="wm-project-files-page__file-info">

                                        <strong>
                                            Stakeholder Presentation.pptx
                                        </strong>

                                        <span>
                                                Presentation · PowerPoint
                                            </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-files-page__owner">

                                        <span class="wm-project-files-page__avatar">
                                            SW
                                        </span>

                                    <span>
                                            Dr. Sarah Wilson
                                        </span>

                                </div>

                            </td>

                            <td>
                                    <span class="wm-project-files-page__folder-label">
                                        Reports
                                    </span>
                            </td>

                            <td>
                                12.8 MB
                            </td>

                            <td>
                                    <span class="wm-project-files-page__date">
                                        Sep 14, 2026
                                    </span>
                            </td>

                            <td>
                                    <span class="wm-project-files-page__version">
                                        v2.0
                                    </span>
                            </td>

                            <td>

                                <div class="wm-project-files-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-files-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-file-action="preview">
                                            <i class="ph ph-eye"></i>
                                            Preview
                                        </button>

                                        <button data-file-action="download">
                                            <i class="ph ph-download-simple"></i>
                                            Download
                                        </button>

                                        <button data-file-action="rename">
                                            <i class="ph ph-pencil-simple"></i>
                                            Rename
                                        </button>

                                        <button data-file-action="move">
                                            <i class="ph ph-folder-notch-open"></i>
                                            Move
                                        </button>

                                        <button data-file-action="share">
                                            <i class="ph ph-share-network"></i>
                                            Share
                                        </button>

                                        <button data-file-action="versions">
                                            <i class="ph ph-clock-counter-clockwise"></i>
                                            Version History
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-file-action="delete"
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

            </div>

        </div>


        {{-- =========================================================
            GRID VIEW
        ========================================================== --}}
        <div
            class="wm-project-files-page__grid-view"
            data-grid-view
        >

            <div class="wm-project-files-page__grid">


                {{-- Folder --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="folder"
                    data-name="Research Planning"
                    data-owner="sarah"
                    data-folder="research"
                    data-file-type="folder"
                    data-size="24"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-folder">
                            <i class="ph ph-folder"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="open">
                                    <i class="ph ph-folder-open"></i>
                                    Open
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Research Planning</h3>

                        <p>
                            Folder · 24 files
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Dr. Sarah Wilson
                        </span>

                        <span>
                            24 files
                        </span>

                    </div>

                </article>


                {{-- PDF --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="file"
                    data-name="Research Methodology.pdf"
                    data-owner="sarah"
                    data-folder="research"
                    data-file-type="pdf"
                    data-size="18"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-pdf">
                            <i class="ph ph-file-pdf"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="preview">
                                    <i class="ph ph-eye"></i>
                                    Preview
                                </button>

                                <button data-file-action="download">
                                    <i class="ph ph-download-simple"></i>
                                    Download
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Research Methodology.pdf</h3>

                        <p>
                            PDF Document · 2.8 MB
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Sarah Wilson
                        </span>

                        <span>
                            v2.1
                        </span>

                    </div>

                </article>


                {{-- Dataset --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="file"
                    data-name="Coastal Samples Dataset.csv"
                    data-owner="michael"
                    data-folder="field"
                    data-file-type="dataset"
                    data-size="842"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-dataset">
                            <i class="ph ph-database"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="preview">
                                    <i class="ph ph-eye"></i>
                                    Preview
                                </button>

                                <button data-file-action="download">
                                    <i class="ph ph-download-simple"></i>
                                    Download
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Coastal Samples Dataset.csv</h3>

                        <p>
                            Dataset · 842 MB
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Michael Johnson
                        </span>

                        <span>
                            v4.0
                        </span>

                    </div>

                </article>


                {{-- Excel --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="file"
                    data-name="Field Observation Log.xlsx"
                    data-owner="michael"
                    data-folder="field"
                    data-file-type="sheet"
                    data-size="6"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-sheet">
                            <i class="ph ph-file-xls"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="preview">
                                    <i class="ph ph-eye"></i>
                                    Preview
                                </button>

                                <button data-file-action="download">
                                    <i class="ph ph-download-simple"></i>
                                    Download
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Field Observation Log.xlsx</h3>

                        <p>
                            Spreadsheet · 6.4 MB
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Michael Johnson
                        </span>

                        <span>
                            v3.2
                        </span>

                    </div>

                </article>


                {{-- Image --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="file"
                    data-name="Coastal Survey Map.png"
                    data-owner="anna"
                    data-folder="analysis"
                    data-file-type="image"
                    data-size="14"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-image">
                            <i class="ph ph-image"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="preview">
                                    <i class="ph ph-eye"></i>
                                    Preview
                                </button>

                                <button data-file-action="download">
                                    <i class="ph ph-download-simple"></i>
                                    Download
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Coastal Survey Map.png</h3>

                        <p>
                            Image · 14.2 MB
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Anna Kim
                        </span>

                        <span>
                            v1.0
                        </span>

                    </div>

                </article>


                {{-- Presentation --}}
                <article
                    class="wm-project-files-page__card"
                    data-grid-item
                    data-item-type="file"
                    data-name="Stakeholder Presentation.pptx"
                    data-owner="sarah"
                    data-folder="reports"
                    data-file-type="presentation"
                    data-size="12"
                >

                    <div class="wm-project-files-page__card-top">

                        <span class="wm-project-files-page__card-icon is-presentation">
                            <i class="ph ph-file-ppt"></i>
                        </span>

                        <div class="wm-project-files-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-files-page__action-menu"
                                data-action-menu
                            >

                                <button data-file-action="preview">
                                    <i class="ph ph-eye"></i>
                                    Preview
                                </button>

                                <button data-file-action="download">
                                    <i class="ph ph-download-simple"></i>
                                    Download
                                </button>

                                <button data-file-action="rename">
                                    <i class="ph ph-pencil-simple"></i>
                                    Rename
                                </button>

                                <button data-file-action="share">
                                    <i class="ph ph-share-network"></i>
                                    Share
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-file-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="wm-project-files-page__card-body">

                        <h3>Stakeholder Presentation.pptx</h3>

                        <p>
                            Presentation · 12.8 MB
                        </p>

                    </div>

                    <div class="wm-project-files-page__card-meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Sarah Wilson
                        </span>

                        <span>
                            v2.0
                        </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-files-page__empty"
            data-empty-state
        >

            <div class="wm-project-files-page__empty-icon">
                <i class="ph ph-folder-open"></i>
            </div>

            <h3>
                No files found
            </h3>

            <p>
                Try changing your search or filters, or upload a new file.
            </p>

            <button
                type="button"
                class="btn btn-primary"
                data-header-action="upload"
            >
                <i class="ph ph-upload-simple"></i>
                Upload Files
            </button>

        </div>


        {{-- =========================================================
            Footer
        ========================================================== --}}
        <div class="wm-project-files-page__footer">

            <span>
                Showing <strong data-visible-count>6</strong> items
            </span>

            <div class="wm-project-files-page__pagination">

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
            Upload Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-files-page__modal"
            id="uploadFilesModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Upload Files
                            </h5>

                            <p>
                                Add research files to this project.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <label
                            class="wm-project-files-page__upload-zone"
                            for="projectFileUpload"
                        >

                            <input
                                type="file"
                                id="projectFileUpload"
                                multiple
                            >

                            <span class="wm-project-files-page__upload-icon">
                                <i class="ph ph-cloud-arrow-up"></i>
                            </span>

                            <strong>
                                Drop files here or click to browse
                            </strong>

                            <small>
                                PDF, DOCX, XLSX, CSV, PPTX, PNG, JPG and other project files
                            </small>

                        </label>


                        <div
                            class="wm-project-files-page__upload-list"
                            data-upload-list
                        ></div>

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
                            data-start-upload
                        >
                            <i class="ph ph-upload-simple"></i>
                            Start Upload
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            New Folder Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-files-page__modal"
            id="newFolderModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Create New Folder
                            </h5>

                            <p>
                                Organize your project files into folders.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <form id="newFolderForm">

                            <label class="form-label">
                                Folder Name
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                name="folder_name"
                                class="form-control"
                                placeholder="e.g. Literature Review"
                                required
                            >


                            <label class="form-label mt-3">
                                Parent Folder
                            </label>

                            <select
                                name="parent_folder"
                                class="form-select"
                            >

                                <option value="">
                                    Project Root
                                </option>

                                <option value="research">
                                    Research Planning
                                </option>

                                <option value="field">
                                    Field Data
                                </option>

                                <option value="analysis">
                                    Data Analysis
                                </option>

                                <option value="reports">
                                    Reports
                                </option>

                            </select>

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
                            data-save-folder
                        >
                            <i class="ph ph-folder-plus"></i>
                            Create Folder
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

            const $search = $('#projectFilesSearch');

            const $filterPanel = $('[data-filter-panel]');

            const $activeFilters = $('[data-active-filters]');

            const $sortMenu = $('[data-sort-menu]');

            const $bulkBar = $('[data-bulk-bar]');

            const $emptyState = $('[data-empty-state]');


            // ---------------------------------------------------------
            // Labels
            // ---------------------------------------------------------

            const typeLabels = {
                pdf: 'PDF',
                doc: 'Document',
                sheet: 'Spreadsheet',
                image: 'Image',
                dataset: 'Dataset',
                presentation: 'Presentation',
                folder: 'Folder'
            };


            const ownerLabels = {
                sarah: 'Dr. Sarah Wilson',
                michael: 'Michael Johnson',
                anna: 'Anna Kim',
                robert: 'Robert Brown'
            };


            const folderLabels = {
                research: 'Research Planning',
                field: 'Field Data',
                analysis: 'Data Analysis',
                reports: 'Reports'
            };


            // ---------------------------------------------------------
            // Notice
            // ---------------------------------------------------------

            function showNotice(title, text, icon) {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: icon || 'info',
                        confirmButtonColor: '#2563EB'
                    });

                    return;
                }

                alert(title + '\n\n' + text);

            }


            // ---------------------------------------------------------
            // Modal Helpers
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

                    type:
                        $('#fileTypeFilter').val(),

                    owner:
                        $('#fileOwnerFilter').val(),

                    folder:
                        $('#fileFolderFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };

            }


            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;


                if (filters.type) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }

                if (filters.folder) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                $activeFilters.empty();


                if (filters.type) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-files-page__filter-chip"
                        data-remove-filter="type"
                    >
                        ${typeLabels[filters.type]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.owner) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-files-page__filter-chip"
                        data-remove-filter="owner"
                    >
                        ${ownerLabels[filters.owner]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.folder) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-files-page__filter-chip"
                        data-remove-filter="folder"
                    >
                        ${folderLabels[filters.folder]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.search) {

                    $activeFilters.prepend(`
                    <button
                        type="button"
                        class="wm-project-files-page__filter-chip"
                        data-remove-search
                    >
                        Search: "${$search.val()}"
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }

            }


            // ---------------------------------------------------------
            // Match Item
            // ---------------------------------------------------------

            function matchesItem(
                $item,
                filters
            ) {

                const name =
                    (
                        $item.data('name') || ''
                    ).toString().toLowerCase();

                const type =
                    $item.data('file-type');

                const owner =
                    $item.data('owner');

                const folder =
                    $item.data('folder');


                if (
                    filters.type &&
                    type !== filters.type
                ) {
                    return false;
                }


                if (
                    filters.owner &&
                    owner !== filters.owner
                ) {
                    return false;
                }


                if (
                    filters.folder &&
                    folder !== filters.folder
                ) {
                    return false;
                }


                if (
                    filters.search &&
                    name.indexOf(filters.search) === -1
                ) {
                    return false;
                }


                return true;

            }


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters = getFilters();

                let listCount = 0;

                let gridCount = 0;


                $('[data-file-item]').each(function () {

                    const $item = $(this);

                    const visible =
                        matchesItem(
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


                $('[data-grid-item]').each(function () {

                    const $item = $(this);

                    const visible =
                        matchesItem(
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
            // View Switching
            // ---------------------------------------------------------

            function switchView(view) {

                $('[data-view]')
                    .removeClass('is-active');

                $('[data-view="' + view + '"]')
                    .addClass('is-active');


                $('[data-list-view]')
                    .removeClass('is-visible');

                $('[data-grid-view]')
                    .removeClass('is-visible');


                if (view === 'list') {

                    $('[data-list-view]')
                        .addClass('is-visible');

                }


                if (view === 'grid') {

                    $('[data-grid-view]')
                        .addClass('is-visible');

                }

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
                '#fileTypeFilter, #fileOwnerFilter, #fileFolderFilter',
                function () {

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Remove Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');


                    if (filter === 'type') {
                        $('#fileTypeFilter').val('');
                    }


                    if (filter === 'owner') {
                        $('#fileOwnerFilter').val('');
                    }


                    if (filter === 'folder') {
                        $('#fileFolderFilter').val('');
                    }


                    applyFilters();

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
            // Clear Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $('#fileTypeFilter').val('');

                    $('#fileOwnerFilter').val('');

                    $('#fileFolderFilter').val('');

                    $search.val('');

                    $('[data-search-clear]')
                        .removeClass('is-visible');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $('[data-summary-filter="all"]')
                        .addClass('is-active');

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
                        $(this).data('summary-filter');


                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $(this)
                        .addClass('is-active');


                    $('#fileTypeFilter').val('');

                    $('#fileOwnerFilter').val('');

                    $('#fileFolderFilter').val('');


                    if (
                        filter === 'folders'
                    ) {

                        $('[data-file-item]')
                            .add('[data-grid-item]')
                            .each(function () {

                                const $item = $(this);

                                $item.data(
                                    'summary-hidden',
                                    $item.data('item-type') !== 'folder'
                                );

                            });

                    }
                    else {

                        $('[data-file-item]')
                            .add('[data-grid-item]')
                            .removeData('summary-hidden');

                    }


                    if (filter === 'recent') {

                        showNotice(
                            'Recent Uploads',
                            'The recent upload filter can be connected to your file activity data.'
                        );

                        return;

                    }


                    if (filter === 'storage') {

                        showNotice(
                            'Storage',
                            'Storage analytics can be connected to your project storage service.'
                        );

                        return;

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View Switch
            // ---------------------------------------------------------

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

                    $sortMenu.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Sorting
            // ---------------------------------------------------------

            function sortFiles(type) {

                const $list =
                    $('[data-file-list]');

                const $rows =
                    $list.find('[data-file-item]')
                        .get();


                $rows.sort(
                    function (a, b) {

                        const $a = $(a);

                        const $b = $(b);


                        if (type === 'name') {

                            return (
                                $a.data('name') || ''
                            ).localeCompare(
                                $b.data('name') || ''
                            );

                        }


                        if (type === 'size') {

                            return (
                                Number(
                                    $b.data('size')
                                ) -
                                Number(
                                    $a.data('size')
                                )
                            );

                        }


                        if (type === 'type') {

                            return (
                                $a.data('file-type') || ''
                            ).localeCompare(
                                $b.data('file-type') || ''
                            );

                        }


                        if (type === 'modified') {

                            return (
                                new Date(
                                    $b.data('modified')
                                ) -
                                new Date(
                                    $a.data('modified')
                                )
                            );

                        }


                        return 0;

                    }
                );


                $.each(
                    $rows,
                    function (_, row) {

                        $list.append(row);

                    }
                );


                $sortMenu.removeClass('is-open');

            }


            $(document).on(
                'click',
                '[data-sort]',
                function () {

                    sortFiles(
                        $(this).data('sort')
                    );

                }
            );


            // ---------------------------------------------------------
            // Selection
            // ---------------------------------------------------------

            function updateSelection() {

                const $checkboxes =
                    $('.file-checkbox');

                const checkedCount =
                    $checkboxes.filter(':checked').length;

                const totalCount =
                    $checkboxes.length;


                $('[data-selected-count]')
                    .text(checkedCount);


                $bulkBar.toggleClass(
                    'is-visible',
                    checkedCount > 0
                );


                $('#selectAllFiles').prop(
                    'checked',
                    totalCount > 0 &&
                    checkedCount === totalCount
                );


                $('#selectAllFiles').prop(
                    'indeterminate',
                    checkedCount > 0 &&
                    checkedCount < totalCount
                );


                $checkboxes.each(function () {

                    $(this)
                        .closest('tr')
                        .toggleClass(
                            'is-selected',
                            $(this).is(':checked')
                        );

                });

            }


            $(document).on(
                'change',
                '.file-checkbox',
                function () {

                    updateSelection();

                }
            );


            $('#selectAllFiles').on(
                'change',
                function () {

                    $('.file-checkbox').prop(
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

                    $('.file-checkbox')
                        .prop('checked', false);

                    $('#selectAllFiles')
                        .prop('checked', false)
                        .prop('indeterminate', false);

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
                        $(this).data('bulk-action');

                    const count =
                        $('.file-checkbox:checked').length;


                    if (!count) {
                        return;
                    }


                    if (action === 'delete') {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete selected files?',
                                text: `${count} item(s) will be removed from the project.`,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#EF4444',
                                cancelButtonColor: '#6B7280',
                                confirmButtonText: 'Delete'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Items deleted',
                                        `${count} item(s) have been removed.`,
                                        'success'
                                    );

                                    $('[data-clear-selection]')
                                        .trigger('click');

                                }

                            });

                        }

                        return;

                    }


                    showNotice(
                        action.charAt(0).toUpperCase() +
                        action.slice(1),
                        `${count} item(s) selected for ${action}.`
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
                            .siblings('[data-action-menu]');


                    $('[data-action-menu]')
                        .not($menu)
                        .removeClass('is-open');


                    $menu.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // File Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-file-action]',
                function () {

                    const action =
                        $(this).data('file-action');


                    const $item =
                        $(this)
                            .closest(
                                '[data-file-item], [data-grid-item]'
                            );


                    const name =
                        $item.data('name') ||
                        'Selected file';


                    $('[data-action-menu]')
                        .removeClass('is-open');


                    if (action === 'delete') {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete item?',
                                text: `"${name}" will be removed from this project.`,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#EF4444',
                                cancelButtonColor: '#6B7280',
                                confirmButtonText: 'Delete'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Item deleted',
                                        `"${name}" has been deleted.`,
                                        'success'
                                    );

                                }

                            });

                        }

                        return;

                    }


                    if (action === 'open') {

                        showNotice(
                            'Open Folder',
                            `Opening "${name}".`
                        );

                        return;

                    }


                    if (action === 'preview') {

                        showNotice(
                            'Preview',
                            `Previewing "${name}".`
                        );

                        return;

                    }


                    if (action === 'download') {

                        showNotice(
                            'Download',
                            `Preparing "${name}" for download.`
                        );

                        return;

                    }


                    if (action === 'rename') {

                        showNotice(
                            'Rename',
                            `Rename "${name}" using the file editor.`
                        );

                        return;

                    }


                    if (action === 'move') {

                        showNotice(
                            'Move',
                            `Move "${name}" to another project folder.`
                        );

                        return;

                    }


                    if (action === 'share') {

                        showNotice(
                            'Share',
                            `Sharing options for "${name}" are ready to connect.`
                        );

                        return;

                    }


                    if (action === 'versions') {

                        showNotice(
                            'Version History',
                            `Version history for "${name}" is ready to connect.`
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
                        $(this).data('header-action');


                    if (action === 'upload') {

                        openModal(
                            'uploadFilesModal'
                        );

                        return;

                    }


                    if (action === 'new-folder') {

                        openModal(
                            'newFolderModal'
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Upload File Selection
            // ---------------------------------------------------------

            $('#projectFileUpload').on(
                'change',
                function () {

                    const files =
                        Array.from(
                            this.files
                        );

                    const $list =
                        $('[data-upload-list]');


                    $list.empty();


                    files.forEach(
                        function (file) {

                            const size =
                                file.size > 1024 * 1024
                                    ? (
                                        file.size /
                                        1024 /
                                        1024
                                    ).toFixed(1) +
                                    ' MB'
                                    : (
                                        file.size /
                                        1024
                                    ).toFixed(1) +
                                    ' KB';


                            $list.append(`
                            <div class="wm-project-files-page__upload-item">

                                <span class="wm-project-files-page__upload-file-icon">
                                    <i class="ph ph-file"></i>
                                </span>

                                <div>
                                    <strong>${file.name}</strong>
                                    <small>${size}</small>
                                </div>

                            </div>
                        `);

                        }
                    );

                }
            );


            // ---------------------------------------------------------
            // Start Upload
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-start-upload]',
                function () {

                    const files =
                        $('#projectFileUpload')[0].files;


                    if (!files.length) {

                        showNotice(
                            'No files selected',
                            'Please choose at least one file before uploading.',
                            'warning'
                        );

                        return;

                    }


                    const modalElement =
                        document.getElementById(
                            'uploadFilesModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(modalElement)
                            .hide();

                    }


                    showNotice(
                        'Upload started',
                        `${files.length} file(s) are ready to be uploaded.`,
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // New Folder
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-folder]',
                function () {

                    const $form =
                        $('#newFolderForm');


                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;

                    }


                    const folderName =
                        $form
                            .find('[name="folder_name"]')
                            .val();


                    const parent =
                        $form
                            .find('[name="parent_folder"]')
                            .val();


                    console.log(
                        'Create folder:',
                        {
                            name: folderName,
                            parent: parent
                        }
                    );


                    const modalElement =
                        document.getElementById(
                            'newFolderModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(modalElement)
                            .hide();

                    }


                    $form[0].reset();


                    showNotice(
                        'Folder created',
                        `"${folderName}" has been created successfully.`,
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
                        .removeClass('is-open');

                    $sortMenu
                        .removeClass('is-open');

                    $('[data-action-menu]')
                        .removeClass('is-open');

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

                    if (event.key === 'Escape') {

                        $filterPanel
                            .removeClass('is-open');

                        $sortMenu
                            .removeClass('is-open');

                        $('[data-action-menu]')
                            .removeClass('is-open');

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

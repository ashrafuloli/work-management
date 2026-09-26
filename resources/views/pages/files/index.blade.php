@extends('layout.app')

@section('main')

    <div class="wm-files-page">

        {{-- ============================================================
            Page Header
        ============================================================= --}}
        <div class="wm-files-page__header">

            <div class="wm-files-page__header-content">

                <div class="wm-files-page__breadcrumb">
                    <a href="{{ route('dashboard') }}" class="wm-files-page__breadcrumb-link">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span class="wm-files-page__breadcrumb-current">
                    Files
                </span>
                </div>

                <div class="wm-files-page__title-row">

                    <div>
                        <h1 class="wm-files-page__title">
                            Files
                        </h1>

                        <p class="wm-files-page__subtitle">
                            Manage, organize, and access files across your projects.
                        </p>
                    </div>

                    <div class="wm-files-page__header-actions">

                        <button
                            type="button"
                            class="wm-btn wm-btn--secondary"
                            data-files-action="new-folder"
                        >
                            <i class="ph ph-folder-plus"></i>
                            <span>New Folder</span>
                        </button>

                        <button
                            type="button"
                            class="wm-btn wm-btn--primary"
                            data-files-action="upload"
                        >
                            <i class="ph ph-upload-simple"></i>
                            <span>Upload Files</span>
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Storage Summary
        ============================================================= --}}
        <div class="wm-files-page__summary">

            <div class="wm-files-page__summary-card">

                <div class="wm-files-page__summary-icon wm-files-page__summary-icon--blue">
                    <i class="ph ph-files"></i>
                </div>

                <div class="wm-files-page__summary-content">
                <span class="wm-files-page__summary-label">
                    Total Files
                </span>

                    <strong class="wm-files-page__summary-value">
                        248
                    </strong>

                    <span class="wm-files-page__summary-meta">
                    Across 12 projects
                </span>
                </div>

            </div>


            <div class="wm-files-page__summary-card">

                <div class="wm-files-page__summary-icon wm-files-page__summary-icon--green">
                    <i class="ph ph-folder-open"></i>
                </div>

                <div class="wm-files-page__summary-content">
                <span class="wm-files-page__summary-label">
                    Folders
                </span>

                    <strong class="wm-files-page__summary-value">
                        36
                    </strong>

                    <span class="wm-files-page__summary-meta">
                    Organized folders
                </span>
                </div>

            </div>


            <div class="wm-files-page__summary-card">

                <div class="wm-files-page__summary-icon wm-files-page__summary-icon--purple">
                    <i class="ph ph-hard-drives"></i>
                </div>

                <div class="wm-files-page__summary-content">
                <span class="wm-files-page__summary-label">
                    Storage Used
                </span>

                    <strong class="wm-files-page__summary-value">
                        18.4 GB
                    </strong>

                    <span class="wm-files-page__summary-meta">
                    of 50 GB
                </span>
                </div>

                <div class="wm-files-page__storage">
                    <div class="wm-files-page__storage-track">
                    <span
                        class="wm-files-page__storage-progress"
                        style="width: 37%;"
                    ></span>
                    </div>

                    <span class="wm-files-page__storage-percent">
                    37%
                </span>
                </div>

            </div>


            <div class="wm-files-page__summary-card">

                <div class="wm-files-page__summary-icon wm-files-page__summary-icon--orange">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </div>

                <div class="wm-files-page__summary-content">
                <span class="wm-files-page__summary-label">
                    Recent Uploads
                </span>

                    <strong class="wm-files-page__summary-value">
                        24
                    </strong>

                    <span class="wm-files-page__summary-meta">
                    This week
                </span>
                </div>

            </div>

        </div>


        {{-- ============================================================
            Main Files Card
        ============================================================= --}}
        <div class="wm-files-page__card">

            {{-- Toolbar --}}
            <div class="wm-files-page__toolbar">

                <div class="wm-files-page__toolbar-left">

                    <div class="wm-files-page__search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wm-file-search"
                            class="wm-files-page__search-input"
                            placeholder="Search files..."
                            autocomplete="off"
                        >

                        <button
                            type="button"
                            class="wm-files-page__search-clear"
                            id="wm-file-search-clear"
                            aria-label="Clear search"
                        >
                            <i class="ph ph-x"></i>
                        </button>

                    </div>


                    <button
                        type="button"
                        class="wm-files-page__filter-toggle"
                        id="wm-file-filter-toggle"
                    >
                        <i class="ph ph-funnel"></i>
                        <span>Filters</span>

                        <span
                            class="wm-files-page__filter-count"
                            id="wm-file-filter-count"
                        >
                        0
                    </span>
                    </button>

                </div>


                <div class="wm-files-page__toolbar-right">

                    <div class="wm-files-page__sort">

                    <span class="wm-files-page__sort-label">
                        Sort:
                    </span>

                        <select
                            id="wm-file-sort"
                            class="wm-files-page__sort-select"
                        >
                            <option value="recent">Recently modified</option>
                            <option value="name-asc">Name A-Z</option>
                            <option value="name-desc">Name Z-A</option>
                            <option value="size-desc">Largest first</option>
                            <option value="size-asc">Smallest first</option>
                        </select>

                    </div>


                    <div class="wm-files-page__view-switcher">

                        <button
                            type="button"
                            class="wm-files-page__view-btn is-active"
                            data-file-view="list"
                            aria-label="List view"
                        >
                            <i class="ph ph-list"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-files-page__view-btn"
                            data-file-view="grid"
                            aria-label="Grid view"
                        >
                            <i class="ph ph-squares-four"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Filters --}}
            <div
                class="wm-files-page__filters"
                id="wm-file-filters"
            >

                <div class="wm-files-page__filter-group">

                    <label for="wm-file-project">
                        Project
                    </label>

                    <select id="wm-file-project">
                        <option value="all">All projects</option>
                        <option value="atlas">Atlas Research</option>
                        <option value="neuro">Neuro Imaging</option>
                        <option value="climate">Climate Study</option>
                        <option value="genome">Genome Project</option>
                    </select>

                </div>


                <div class="wm-files-page__filter-group">

                    <label for="wm-file-type">
                        File Type
                    </label>

                    <select id="wm-file-type">
                        <option value="all">All types</option>
                        <option value="pdf">PDF</option>
                        <option value="document">Documents</option>
                        <option value="spreadsheet">Spreadsheets</option>
                        <option value="image">Images</option>
                        <option value="archive">Archives</option>
                    </select>

                </div>


                <div class="wm-files-page__filter-group">

                    <label for="wm-file-owner">
                        Uploaded By
                    </label>

                    <select id="wm-file-owner">
                        <option value="all">Everyone</option>
                        <option value="olivia">Olivia Martin</option>
                        <option value="sophia">Sophia Chen</option>
                        <option value="ethan">Ethan Brooks</option>
                        <option value="liam">Liam Carter</option>
                    </select>

                </div>


                <div class="wm-files-page__filter-group">

                    <label for="wm-file-date">
                        Date
                    </label>

                    <select id="wm-file-date">
                        <option value="all">Any time</option>
                        <option value="today">Today</option>
                        <option value="week">This week</option>
                        <option value="month">This month</option>
                    </select>

                </div>


                <button
                    type="button"
                    class="wm-files-page__clear-filters"
                    id="wm-file-clear-filters"
                >
                    Clear filters
                </button>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-files-page__active-filters"
                id="wm-file-active-filters"
            ></div>


            {{-- ========================================================
                List View
            ========================================================= --}}
            <div
                class="wm-files-page__list-view"
                id="wm-file-list-view"
            >

                <div class="wm-files-page__table-wrap">

                    <table class="wm-files-page__table">

                        <thead>
                        <tr>
                            <th class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input
                                        type="checkbox"
                                        id="wm-file-select-all"
                                    >
                                    <span></span>
                                </label>
                            </th>

                            <th>
                                File
                            </th>

                            <th>
                                Project
                            </th>

                            <th>
                                Uploaded By
                            </th>

                            <th>
                                Size
                            </th>

                            <th>
                                Modified
                            </th>

                            <th class="wm-files-page__action-column"></th>
                        </tr>
                        </thead>


                        <tbody id="wm-file-table-body">

                        {{-- PDF --}}
                        <tr
                            class="wm-files-page__file-row"
                            data-file
                            data-name="research proposal final.pdf"
                            data-project="atlas"
                            data-type="pdf"
                            data-owner="olivia"
                            data-date="week"
                            data-size="2450000"
                            data-modified="2026-09-23"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--pdf">
                                        <i class="ph ph-file-pdf"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Research Proposal Final.pdf
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            PDF Document
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Atlas Research
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        OM
                                    </div>

                                    <span>
                                        Olivia Martin
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                2.4 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 23, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                        aria-label="File actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">
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

                                        <div class="wm-files-page__action-divider"></div>

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
                            class="wm-files-page__file-row"
                            data-file
                            data-name="experiment results.xlsx"
                            data-project="neuro"
                            data-type="spreadsheet"
                            data-owner="sophia"
                            data-date="week"
                            data-size="6800000"
                            data-modified="2026-09-22"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--excel">
                                        <i class="ph ph-file-xls"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Experiment Results.xlsx
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            Spreadsheet
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Neuro Imaging
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        SC
                                    </div>

                                    <span>
                                        Sophia Chen
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                6.8 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 22, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">
                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>


                        {{-- Image --}}
                        <tr
                            class="wm-files-page__file-row"
                            data-file
                            data-name="microscope sample image.png"
                            data-project="genome"
                            data-type="image"
                            data-owner="liam"
                            data-date="month"
                            data-size="12500000"
                            data-modified="2026-09-20"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--image">
                                        <i class="ph ph-file-image"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Microscope Sample Image.png
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            PNG Image
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Genome Project
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        LC
                                    </div>

                                    <span>
                                        Liam Carter
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                12.5 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 20, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>


                        {{-- Document --}}
                        <tr
                            class="wm-files-page__file-row"
                            data-file
                            data-name="field notes september.docx"
                            data-project="atlas"
                            data-type="document"
                            data-owner="olivia"
                            data-date="month"
                            data-size="1850000"
                            data-modified="2026-09-18"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--word">
                                        <i class="ph ph-file-doc"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Field Notes September.docx
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            Word Document
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Atlas Research
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        OM
                                    </div>

                                    <span>
                                        Olivia Martin
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                1.8 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 18, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>


                        {{-- PDF --}}
                        <tr
                            class="wm-files-page__file-row"
                            data-file
                            data-name="monthly research report.pdf"
                            data-project="climate"
                            data-type="pdf"
                            data-owner="ethan"
                            data-date="month"
                            data-size="4200000"
                            data-modified="2026-09-15"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--pdf">
                                        <i class="ph ph-file-pdf"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Monthly Research Report.pdf
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            PDF Document
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Climate Study
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        EB
                                    </div>

                                    <span>
                                        Ethan Brooks
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                4.2 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 15, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>


                        {{-- Archive --}}
                        <tr
                            class="wm-files-page__file-row"
                            data-file
                            data-name="raw-data-archive.zip"
                            data-project="genome"
                            data-type="archive"
                            data-owner="liam"
                            data-date="month"
                            data-size="28000000"
                            data-modified="2026-09-12"
                        >
                            <td class="wm-files-page__check-column">
                                <label class="wm-checkbox">
                                    <input type="checkbox" class="wm-file-checkbox">
                                    <span></span>
                                </label>
                            </td>

                            <td>
                                <div class="wm-files-page__file-info">

                                    <div class="wm-files-page__file-icon wm-files-page__file-icon--archive">
                                        <i class="ph ph-file-zip"></i>
                                    </div>

                                    <div class="wm-files-page__file-content">
                                        <a href="#" class="wm-files-page__file-name">
                                            Raw Data Archive.zip
                                        </a>

                                        <span class="wm-files-page__file-meta">
                                            ZIP Archive
                                        </span>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <a href="#" class="wm-files-page__project">
                                    Genome Project
                                </a>
                            </td>

                            <td>
                                <div class="wm-files-page__owner">
                                    <div class="wm-files-page__avatar">
                                        LC
                                    </div>

                                    <span>
                                        Liam Carter
                                    </span>
                                </div>
                            </td>

                            <td class="wm-files-page__size">
                                28 MB
                            </td>

                            <td>
                                <span class="wm-files-page__date">
                                    Sep 12, 2026
                                </span>
                            </td>

                            <td>
                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
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


            {{-- ========================================================
                Grid View
            ========================================================= --}}
            <div
                class="wm-files-page__grid-view"
                id="wm-file-grid-view"
            >

                <div class="wm-files-page__grid">

                    @foreach([
                        [
                            'name' => 'Research Proposal Final.pdf',
                            'type' => 'pdf',
                            'icon' => 'ph-file-pdf',
                            'project' => 'Atlas Research',
                            'owner' => 'Olivia Martin',
                            'initials' => 'OM',
                            'size' => '2.4 MB',
                            'date' => 'Sep 23, 2026',
                        ],
                        [
                            'name' => 'Experiment Results.xlsx',
                            'type' => 'excel',
                            'icon' => 'ph-file-xls',
                            'project' => 'Neuro Imaging',
                            'owner' => 'Sophia Chen',
                            'initials' => 'SC',
                            'size' => '6.8 MB',
                            'date' => 'Sep 22, 2026',
                        ],
                        [
                            'name' => 'Microscope Sample Image.png',
                            'type' => 'image',
                            'icon' => 'ph-file-image',
                            'project' => 'Genome Project',
                            'owner' => 'Liam Carter',
                            'initials' => 'LC',
                            'size' => '12.5 MB',
                            'date' => 'Sep 20, 2026',
                        ],
                        [
                            'name' => 'Field Notes September.docx',
                            'type' => 'word',
                            'icon' => 'ph-file-doc',
                            'project' => 'Atlas Research',
                            'owner' => 'Olivia Martin',
                            'initials' => 'OM',
                            'size' => '1.8 MB',
                            'date' => 'Sep 18, 2026',
                        ],
                        [
                            'name' => 'Monthly Research Report.pdf',
                            'type' => 'pdf',
                            'icon' => 'ph-file-pdf',
                            'project' => 'Climate Study',
                            'owner' => 'Ethan Brooks',
                            'initials' => 'EB',
                            'size' => '4.2 MB',
                            'date' => 'Sep 15, 2026',
                        ],
                        [
                            'name' => 'Raw Data Archive.zip',
                            'type' => 'archive',
                            'icon' => 'ph-file-zip',
                            'project' => 'Genome Project',
                            'owner' => 'Liam Carter',
                            'initials' => 'LC',
                            'size' => '28 MB',
                            'date' => 'Sep 12, 2026',
                        ],
                    ] as $file)

                        <div class="wm-files-page__grid-card">

                            <div class="wm-files-page__grid-card-top">

                                <div class="wm-files-page__file-icon wm-files-page__file-icon--{{ $file['type'] }}">
                                    <i class="ph {{ $file['icon'] }}"></i>
                                </div>

                                <div class="wm-files-page__action">

                                    <button
                                        type="button"
                                        class="wm-files-page__action-btn"
                                        data-file-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-files-page__action-menu">

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

                                        <div class="wm-files-page__action-divider"></div>

                                        <button class="is-danger" data-file-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </div>


                            <a href="#" class="wm-files-page__grid-name">
                                {{ $file['name'] }}
                            </a>

                            <span class="wm-files-page__grid-type">
                            {{ strtoupper(pathinfo($file['name'], PATHINFO_EXTENSION)) }} File
                        </span>


                            <div class="wm-files-page__grid-project">

                                <i class="ph ph-folder-simple"></i>

                                <span>
                                {{ $file['project'] }}
                            </span>

                            </div>


                            <div class="wm-files-page__grid-footer">

                                <div class="wm-files-page__owner">

                                    <div class="wm-files-page__avatar">
                                        {{ $file['initials'] }}
                                    </div>

                                    <span>
                                    {{ $file['owner'] }}
                                </span>

                                </div>

                                <span class="wm-files-page__grid-size">
                                {{ $file['size'] }}
                            </span>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- Empty State --}}
            <div
                class="wm-files-page__empty"
                id="wm-file-empty"
            >

                <div class="wm-files-page__empty-icon">
                    <i class="ph ph-files"></i>
                </div>

                <h3>
                    No files found
                </h3>

                <p>
                    Try adjusting your search or filters to find what you're looking for.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-file-empty-reset"
                >
                    Clear filters
                </button>

            </div>


            {{-- Footer --}}
            <div class="wm-files-page__footer">

                <div class="wm-files-page__footer-info">
                    Showing
                    <strong id="wm-file-visible-count">6</strong>
                    of
                    <strong>248</strong>
                    files
                </div>

                <div class="wm-files-page__pagination">

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn is-disabled"
                        disabled
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn is-active"
                    >
                        1
                    </button>

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn"
                    >
                        2
                    </button>

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn"
                    >
                        3
                    </button>

                    <span class="wm-files-page__pagination-dots">
                    ...
                </span>

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn"
                    >
                        42
                    </button>

                    <button
                        type="button"
                        class="wm-files-page__pagination-btn"
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

            const $page = $('.wm-files-page');

            const $search = $('#wm-file-search');
            const $searchClear = $('#wm-file-search-clear');

            const $filters = $('#wm-file-filters');
            const $filterToggle = $('#wm-file-filter-toggle');
            const $filterCount = $('#wm-file-filter-count');

            const $project = $('#wm-file-project');
            const $type = $('#wm-file-type');
            const $owner = $('#wm-file-owner');
            const $date = $('#wm-file-date');

            const $sort = $('#wm-file-sort');

            const $rows = $('[data-file]');
            const $empty = $('#wm-file-empty');

            const $listView = $('#wm-file-list-view');
            const $gridView = $('#wm-file-grid-view');

            const $viewButtons = $('[data-file-view]');

            const $activeFilters = $('#wm-file-active-filters');

            const $visibleCount = $('#wm-file-visible-count');

            const $selectAll = $('#wm-file-select-all');


            // ============================================================
            // State
            // ============================================================

            let currentView = 'list';


            // ============================================================
            // Functions
            // ============================================================

            function getFilters() {

                return {
                    search: $.trim($search.val()).toLowerCase(),
                    project: $project.val(),
                    type: $type.val(),
                    owner: $owner.val(),
                    date: $date.val()
                };

            }


            function filterFiles() {

                const filters = getFilters();

                let visibleCount = 0;


                $rows.each(function () {

                    const $row = $(this);

                    const name = String($row.data('name')).toLowerCase();

                    const project = $row.data('project');
                    const type = $row.data('type');
                    const owner = $row.data('owner');
                    const date = $row.data('date');


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);

                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;

                    const matchesType =
                        filters.type === 'all' ||
                        type === filters.type;

                    const matchesOwner =
                        filters.owner === 'all' ||
                        owner === filters.owner;

                    const matchesDate =
                        filters.date === 'all' ||
                        date === filters.date;


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesType &&
                        matchesOwner &&
                        matchesDate;


                    $row.toggle(visible);


                    if (visible) {
                        visibleCount++;
                    }

                });


                updateGridVisibility(filters);

                updateActiveFilters();

                updateFilterCount();

                updateEmptyState(visibleCount);

                $visibleCount.text(visibleCount);

            }


            function updateGridVisibility(filters) {

                const $cards = $gridView.find('.wm-files-page__grid-card');

                $cards.each(function () {

                    const $card = $(this);

                    const name = $.trim(
                        $card.find('.wm-files-page__grid-name').text()
                    ).toLowerCase();

                    const projectText = $.trim(
                        $card.find('.wm-files-page__grid-project span').text()
                    ).toLowerCase();

                    const typeText = $.trim(
                        $card.find('.wm-files-page__grid-type').text()
                    ).toLowerCase();


                    const matchesSearch =
                        !filters.search ||
                        name.includes(filters.search);

                    const matchesProject =
                        filters.project === 'all' ||
                        projectText.includes(
                            getProjectLabel(filters.project).toLowerCase()
                        );

                    const matchesType =
                        filters.type === 'all' ||
                        typeText.includes(
                            getTypeLabel(filters.type).toLowerCase()
                        );


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesType;


                    $card.toggle(visible);

                });

            }


            function getProjectLabel(value) {

                const labels = {
                    atlas: 'Atlas Research',
                    neuro: 'Neuro Imaging',
                    climate: 'Climate Study',
                    genome: 'Genome Project'
                };

                return labels[value] || '';

            }


            function getTypeLabel(value) {

                const labels = {
                    pdf: 'PDF',
                    document: 'DOCX',
                    spreadsheet: 'XLSX',
                    image: 'PNG',
                    archive: 'ZIP'
                };

                return labels[value] || '';

            }


            function updateEmptyState(visibleCount) {

                if (visibleCount === 0) {

                    $empty.addClass('is-visible');

                    if (currentView === 'list') {
                        $listView.hide();
                    } else {
                        $gridView.hide();
                    }

                } else {

                    $empty.removeClass('is-visible');

                    if (currentView === 'list') {
                        $listView.show();
                    } else {
                        $gridView.show();
                    }

                }

            }


            function updateFilterCount() {

                let count = 0;


                if ($project.val() !== 'all') {
                    count++;
                }

                if ($type.val() !== 'all') {
                    count++;
                }

                if ($owner.val() !== 'all') {
                    count++;
                }

                if ($date.val() !== 'all') {
                    count++;
                }


                $filterCount.text(count);

                $filterCount.toggle(count > 0);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                let html = '';


                if (filters.project !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-files-page__filter-chip"
                        data-remove-filter="project"
                    >
                        Project: ${getProjectLabel(filters.project)}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.type !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-files-page__filter-chip"
                        data-remove-filter="type"
                    >
                        Type: ${getTypeLabel(filters.type)}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.owner !== 'all') {

                    const ownerLabel =
                        $owner.find('option:selected').text();

                    html += `
                    <button
                        type="button"
                        class="wm-files-page__filter-chip"
                        data-remove-filter="owner"
                    >
                        Owner: ${ownerLabel}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.date !== 'all') {

                    const dateLabel =
                        $date.find('option:selected').text();

                    html += `
                    <button
                        type="button"
                        class="wm-files-page__filter-chip"
                        data-remove-filter="date"
                    >
                        Date: ${dateLabel}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                $activeFilters.html(html);

            }


            function resetFilters() {

                $search.val('');

                $project.val('all');
                $type.val('all');
                $owner.val('all');
                $date.val('all');

                filterFiles();

            }


            function closeMenus() {

                $('.wm-files-page__action').removeClass('is-open');

            }


            function sortFiles() {

                const sortValue = $sort.val();

                const $tbody = $('#wm-file-table-body');

                const rows = $tbody
                    .find('[data-file]')
                    .get();


                rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);

                    if (sortValue === 'name-asc') {

                        return String($a.data('name'))
                            .localeCompare(String($b.data('name')));

                    }


                    if (sortValue === 'name-desc') {

                        return String($b.data('name'))
                            .localeCompare(String($a.data('name')));

                    }


                    if (sortValue === 'size-desc') {

                        return Number($b.data('size')) -
                            Number($a.data('size'));

                    }


                    if (sortValue === 'size-asc') {

                        return Number($a.data('size')) -
                            Number($b.data('size'));

                    }


                    return String($b.data('modified'))
                        .localeCompare(String($a.data('modified')));

                });


                $.each(rows, function (_, row) {

                    $tbody.append(row);

                });


                filterFiles();

            }


            function showActionMessage(action, fileName) {

                console.log(
                    'File action:',
                    action,
                    fileName
                );

            }


            // ============================================================
            // Events
            // ============================================================

            $search.on('input', function () {

                $searchClear.toggle(
                    $.trim($(this).val()).length > 0
                );

                filterFiles();

            });


            $searchClear.on('click', function () {

                $search.val('');

                $(this).hide();

                filterFiles();

                $search.trigger('focus');

            });


            $filterToggle.on('click', function () {

                $filters.toggleClass('is-visible');

            });


            $project
                .add($type)
                .add($owner)
                .add($date)
                .on('change', function () {

                    filterFiles();

                });


            $sort.on('change', function () {

                sortFiles();

            });


            $('#wm-file-clear-filters')
                .add('#wm-file-empty-reset')
                .on('click', function () {

                    resetFilters();

                });


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter = $(this).data('remove-filter');

                    if (filter === 'project') {
                        $project.val('all');
                    }

                    if (filter === 'type') {
                        $type.val('all');
                    }

                    if (filter === 'owner') {
                        $owner.val('all');
                    }

                    if (filter === 'date') {
                        $date.val('all');
                    }

                    filterFiles();

                }
            );


            $viewButtons.on('click', function () {

                const view = $(this).data('file-view');

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


                filterFiles();

            });


            $(document).on(
                'click',
                '[data-file-menu]',
                function (event) {

                    event.stopPropagation();

                    const $action = $(this).closest(
                        '.wm-files-page__action'
                    );


                    $('.wm-files-page__action')
                        .not($action)
                        .removeClass('is-open');


                    $action.toggleClass('is-open');

                }
            );


            $(document).on(
                'click',
                '[data-file-action]',
                function () {

                    const action =
                        $(this).data('file-action');

                    const $row =
                        $(this).closest('[data-file]');

                    let fileName = '';

                    if ($row.length) {

                        fileName =
                            $row.find('.wm-files-page__file-name')
                                .text()
                                .trim();

                    } else {

                        fileName =
                            $(this)
                                .closest('.wm-files-page__grid-card')
                                .find('.wm-files-page__grid-name')
                                .text()
                                .trim();

                    }


                    closeMenus();

                    showActionMessage(
                        action,
                        fileName
                    );

                }
            );


            $(document).on(
                'click',
                '[data-files-action]',
                function () {

                    const action =
                        $(this).data('files-action');

                    console.log(
                        'Files header action:',
                        action
                    );

                }
            );


            $selectAll.on('change', function () {

                const checked = $(this).is(':checked');

                $('#wm-file-table-body [data-file]:visible')
                    .find('.wm-file-checkbox')
                    .prop('checked', checked);

            });


            $(document).on(
                'change',
                '.wm-file-checkbox',
                function () {

                    const $visibleCheckboxes =
                        $('#wm-file-table-body [data-file]:visible')
                            .find('.wm-file-checkbox');

                    const checkedCount =
                        $visibleCheckboxes.filter(':checked').length;

                    $selectAll.prop(
                        'checked',
                        checkedCount === $visibleCheckboxes.length &&
                        $visibleCheckboxes.length > 0
                    );

                }
            );


            $(document).on(
                'click',
                '.wm-files-page__file-name, .wm-files-page__grid-name',
                function (event) {

                    event.preventDefault();

                    console.log(
                        'Open file:',
                        $(this).text().trim()
                    );

                }
            );


            $(document).on(
                'click',
                '.wm-files-page__project',
                function (event) {

                    event.preventDefault();

                    console.log(
                        'Open project:',
                        $(this).text().trim()
                    );

                }
            );


            $(document).on(
                'click',
                function () {

                    closeMenus();

                }
            );


            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeMenus();

                        $filters.removeClass('is-visible');

                    }

                }
            );


            // ============================================================
            // Initial
            // ============================================================

            $searchClear.hide();

            $filterCount.hide();

            $gridView.hide();

            filterFiles();

        });

    </script>

@endpush

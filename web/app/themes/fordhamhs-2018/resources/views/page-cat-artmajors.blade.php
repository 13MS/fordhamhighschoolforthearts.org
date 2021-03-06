@php
/**
 * Template Name: Art Major Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="columns is-multiline">
        <div class="column is-12">
          @include('partials.page-header')
        </div>
        <div class="column is-8">
            @include('partials.content-page')
        </div>
        <div class="sidebar column is-4">
            @include('partials.sidebar-artmajors')
        </div>
    </div>
  @endwhile
@endsection

@extends('errors::minimal')

@section('title', __('Anda tidak mempunyai akses!'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Anda tidak mempunyai akses!'))

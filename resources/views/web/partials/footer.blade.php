<a href="javascript:;" class="btn-cta-preview js-btn-cta is-hidden">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>
    <em>{{__('page.heading-get-in-touch')}}</em>
  </div>
</a>
<section class="cta js-wrapper-cta">
  <div>
    <h2>{{__('page.heading-how-can-we-help')}}</h2>
    <div class="cta__buttons">
      
      {{-- 
      @if (request()->routeIs('*.page.product.show'))
        <a href="{{ localized_route('page.forms.callback', ['slug' => AppHelper::slug($product->title), 'product' => $product->id ]) }}" class="btn-cta" title="{{__('page.request-callback')}}">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33 25.38v4.5a3 3 0 0 1-3.27 3 29.685 29.685 0 0 1-12.945-4.605 29.25 29.25 0 0 1-9-9A29.685 29.685 0 0 1 3.18 6.27 3 3 0 0 1 6.165 3h4.5a3 3 0 0 1 3 2.58c.19 1.44.542 2.854 1.05 4.215a3 3 0 0 1-.675 3.165l-1.905 1.905a24 24 0 0 0 9 9l1.905-1.905a3 3 0 0 1 3.165-.675c1.36.508 2.775.86 4.215 1.05A3 3 0 0 1 33 25.38z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-callback-text')!!}</div>
        </a>
        <a href="{{ localized_route('page.forms.training', ['slug' => AppHelper::slug($product->title), 'product' => $product->id ]) }}" class="btn-cta" title="{{__('page.request-training')}}">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.5 6h-21a3 3 0 0 0-3 3v21a3 3 0 0 0 3 3h21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3zM24 3v6M12 3v6M4.5 15h27" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-training-text')!!}</div>
        </a>
        <a href="{{ localized_route('page.forms.presentation', ['slug' => AppHelper::slug($product->title), 'product' => $product->id ]) }}" class="btn-cta" title="{{__('page.request-presentation')}}">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.81 9.63a4.17 4.17 0 0 0-2.91-3C28.32 6 18 6 18 6S7.68 6 5.1 6.69a4.17 4.17 0 0 0-2.91 3 43.5 43.5 0 0 0-.69 7.935 43.5 43.5 0 0 0 .69 7.995A4.17 4.17 0 0 0 5.1 28.5c2.58.69 12.9.69 12.9.69s10.32 0 12.9-.69a4.171 4.171 0 0 0 2.91-3c.468-2.599.7-5.235.69-7.875a43.498 43.498 0 0 0-.69-7.995z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.625 22.53l8.625-4.905-8.625-4.905v9.81z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-presentation-text')!!}</div>
        </a>
      @else
        <a href="{{ localized_route('page.forms.callback') }}" class="btn-cta" title="Rückruf">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33 25.38v4.5a3 3 0 0 1-3.27 3 29.685 29.685 0 0 1-12.945-4.605 29.25 29.25 0 0 1-9-9A29.685 29.685 0 0 1 3.18 6.27 3 3 0 0 1 6.165 3h4.5a3 3 0 0 1 3 2.58c.19 1.44.542 2.854 1.05 4.215a3 3 0 0 1-.675 3.165l-1.905 1.905a24 24 0 0 0 9 9l1.905-1.905a3 3 0 0 1 3.165-.675c1.36.508 2.775.86 4.215 1.05A3 3 0 0 1 33 25.38z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-callback-text')!!}</div>
        </a>
        <a href="{{ localized_route('page.forms.training') }}" class="btn-cta" title="Anfrage Schulung">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.5 6h-21a3 3 0 0 0-3 3v21a3 3 0 0 0 3 3h21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3zM24 3v6M12 3v6M4.5 15h27" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-training-text')!!}</div>
        </a>
        <a href="{{ localized_route('page.forms.presentation') }}" class="btn-cta" title="Anfrage Präsentation">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.81 9.63a4.17 4.17 0 0 0-2.91-3C28.32 6 18 6 18 6S7.68 6 5.1 6.69a4.17 4.17 0 0 0-2.91 3 43.5 43.5 0 0 0-.69 7.935 43.5 43.5 0 0 0 .69 7.995A4.17 4.17 0 0 0 5.1 28.5c2.58.69 12.9.69 12.9.69s10.32 0 12.9-.69a4.171 4.171 0 0 0 2.91-3c.468-2.599.7-5.235.69-7.875a43.498 43.498 0 0 0-.69-7.995z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.625 22.53l8.625-4.905-8.625-4.905v9.81z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-presentation-text')!!}</div>
        </a>
      @endif
      --}}

      {{-- <a href="javascript:;" class="btn-cta js-btn-livechat">
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.5 17.25a12.57 12.57 0 0 1-1.35 5.7A12.751 12.751 0 0 1 18.75 30a12.57 12.57 0 0 1-5.7-1.35L4.5 31.5l2.85-8.55A12.57 12.57 0 0 1 6 17.25a12.75 12.75 0 0 1 7.05-11.4 12.57 12.57 0 0 1 5.7-1.35h.75a12.72 12.72 0 0 1 12 12v.75z" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div>{!!__('page.request-livechat-text')!!}</div>
      </a>
  --}}
      @if (request()->routeIs('*.page.product.show'))
        <a href="{{ localized_route('page.forms.training', ['slug' => AppHelper::slug($product->title), 'product' => $product->id ]) }}" class="btn-cta" title="{{__('page.request-training')}}">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.5 6h-21a3 3 0 0 0-3 3v21a3 3 0 0 0 3 3h21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3zM24 3v6M12 3v6M4.5 15h27" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-training-text')!!}</div>
        </a>
      @else
        <a href="{{ localized_route('page.forms.training') }}" class="btn-cta" title="Anfrage Schulung">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.5 6h-21a3 3 0 0 0-3 3v21a3 3 0 0 0 3 3h21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3zM24 3v6M12 3v6M4.5 15h27" stroke="#E3051B" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div>{!!__('page.request-training-text')!!}</div>
        </a>
      @endif

      <a href="{{ localized_route('page.forms.rent') }}" class="btn-cta" title="Anfrage Produktemiete">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#E3051B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
        <div>{!!__('page.request-rent-text')!!}</div>
      </a>
    </div>
  </div>
</section>
<footer class="site-footer">
  <div>
    <div class="copy">
      Copyright © {{date('Y', time())}} {{\Config::get('custom.company')}}<br>{!!__('page.copyright')!!}
      <svg width="210" height="31" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489.19 70.53"><path d="M44.65,15.64c0-3.6,2.53-6.52,5.65-6.52s5.64,2.92,5.64,6.52-2.53,6.52-5.64,6.52-5.65-2.92-5.65-6.52" transform="translate(0.21 0.21)" style="fill:#e3051b"></path><path d="M44.65,15.64c0-3.6,2.53-6.52,5.65-6.52s5.64,2.92,5.64,6.52-2.53,6.52-5.64,6.52S44.65,19.24,44.65,15.64Z" transform="translate(0.21 0.21)" style="fill:none;stroke:#e3051b;stroke-width:0.4189999997615814px"></path><path d="M182,41.69c5.54-2.37,10.61-2.78,11.32-.92s-3.22,4.9-8.76,7.27a20.84,20.84,0,0,1-10.45,1.59A16.41,16.41,0,0,1,182,41.69m216.22-2.27s-7.42-10.57-19.83-2.29c0,0,10.19-15.52,19-26.24a2.91,2.91,0,0,0-.16-3,10.88,10.88,0,0,0-2.74-3.42c-1-.73-2-.9-4.19,1.64S375.79,24.22,360,38.62s-28.62,24.62-31.25,21.59,4.63-13.54,6.83-16.41,3.58-5.74,1.55-8.58-3.23-1.49-5,.8-20.81,27.35-30.68,24.19c-3.82-1.3,1.12-14.41,17.82-17.84,3.85-.79,6-1.24,6.85-1.37s.93-.64,1.33-2.1,1.58-4.83-1-4.87-11.4,0-19.13,4.26c-10.35,5.65-14.12,12.13-22,16.19s-21.08,9.71-24.23,5.17,6.51-16.07,18.59-16.86c3.61,0,7.72.81,8.2-1.29a31.66,31.66,0,0,0,1-5.43c.09-1.61-.41-2.27-2.32-2.26s-8.14-.79-15.46,1.84S254.81,46,246.36,44.9c-6.74-.86-8.25-1.82-9.25-4.83-.25-.76.06-1.76-.24-2.89-2-7.69-13.42-2.09-21.27,4-5.8,4.49-19.15,17.37-27.28,19.72s-13.6,1.27-14.39-4.41a33.48,33.48,0,0,0,13.33-2.41c6.23-2.45,11.78-7.67,12.9-11.26,1.54-4.94-1.21-9.39-7.74-9.53s-11.59.77-18.65,5.81c-6.58,4.69-7.65,10.39-7.65,10.39s-10,.14-17.2-1.71a71.34,71.34,0,0,1,10-20.08,86.42,86.42,0,0,1,15.85-16c1.8-1.54,2-1.26,1.58-3.44a9.88,9.88,0,0,0-1.46-3.84c-.61-1.14-2.22-.65-4.22.79-1.4,1-24.15,18.52-24.15,18.52-8.27,6.1-42,34-42,34l2.67-19.34a2.71,2.71,0,0,0-.92-2.56,10.18,10.18,0,0,0-2.61-2.06,2.48,2.48,0,0,0-2.85-.07L71.8,59.54l2.74-21.76a2.35,2.35,0,0,0-.61-2.18,9.41,9.41,0,0,0-2-1.57,2.69,2.69,0,0,0-2.4.24l-14,12.37c-8.12,6-17.22,13.3-17.22,13.3l3-21.78a2.71,2.71,0,0,0-.92-2.56c-1.32-1.42-1.84-1.43-1.84-1.43S38,32.75,35.93,34L1.53,62.84c-1.5,1.25-2.09,2.68-.88,4A17.47,17.47,0,0,0,3.08,69s.71,1.61,3.31-.41S33.09,47,33.09,47L30.77,63l1.11,1.71a27.38,27.38,0,0,0,2.79,2.72l1.22,1.24s.36.83,1.84.46a5.65,5.65,0,0,0,1.47-.86l4.4-3.42c2.95-2.21,6.85-5.19,10.77-8.36l11.34-8.82L64.1,63l1.11,1.71a45.68,45.68,0,0,0,4.45,4.14c.4.29.91.85,2.31-.3.6-.49,5.57-4.69,11.41-9.55L98.06,47.67,96.44,63l1.12,1.71A44.56,44.56,0,0,0,102,68.85c.4.29.91.85,2.31-.3.7-.58,31.41-25.37,43.11-34.91-.67,1.54-4.63,10.59-5.35,12.86a15.29,15.29,0,0,1-4.73-.92c-2.32-.84-3.21.79-3.3,1.93a18.24,18.24,0,0,0,.43,4.74c.31.94.72,1.51,2.53,2.07l1.71.37s-1.31,10.39.61,12.47,3,3.21,5.23,1.76a3,3,0,0,0,.18-3.14c-.81-2-.07-8.74.63-9.61s1.2-.86,2.61-.49,7.91,2,18.56,1.36a12.58,12.58,0,0,0,8.3,10.52c6.71,2.45,18.32,1.36,29.32-7.29s19.65-16.08,22.05-16.76.87,2.3.17,3.26-6.65,11.07-7.64,13.93-1,4.58,0,6.28,2.53,3,3.33,3.11,1.11-.19,2.3-3.44A47.51,47.51,0,0,1,227.94,58c1.92-3.3,3.82-5,4.8-6.4,1.43-1.35,1.8-2.1,4.72-1.27s8.25,2.7,18.18.24c0,0-7.25,9.82,1.63,16.78C260,69.1,271,73.05,294.37,56.78c0,0-2.26,10.47,6.6,12.2,5.07.46,12.54-3.5,20.43-11.47,0,0-.61,10.23,7.7,10.79C335,69,348.18,59,367.71,40.07c0,0-9.5,21.71-10,23.14s-.59,2.39.62,3.33,5.34,3.48,5.84,2.24,7.72-17.33,13.22-21.94,11.45-7.57,14.75-4.21c1.71,1.73,3.38,4,1.42,10.86s-7.55,8.93-10,7.28c-2.17-1.43-3.3-2.32-3.91-3.26s-4.23-1.68-3.7,2.41a11.2,11.2,0,0,0,12.52,9.22,14.53,14.53,0,0,0,8-3.09c5.15-4.34,8.69-16.49,1.7-26.63" transform="translate(0.21 0.21)" style="fill:#e3051b"></path><path d="M182,41.69c5.54-2.37,10.61-2.78,11.32-.92s-3.22,4.9-8.76,7.27a20.84,20.84,0,0,1-10.45,1.59A16.41,16.41,0,0,1,182,41.69Zm216.22-2.27s-7.42-10.57-19.83-2.29c0,0,10.19-15.52,19-26.24a2.91,2.91,0,0,0-.16-3,10.88,10.88,0,0,0-2.74-3.42c-1-.73-2-.9-4.19,1.64S375.79,24.22,360,38.62s-28.62,24.62-31.25,21.59,4.63-13.54,6.83-16.41,3.58-5.74,1.55-8.58-3.23-1.49-5,.8-20.81,27.35-30.68,24.19c-3.82-1.3,1.12-14.41,17.82-17.84,3.85-.79,6-1.24,6.85-1.37s.93-.64,1.33-2.1,1.58-4.83-1-4.87-11.4,0-19.13,4.26c-10.35,5.65-14.12,12.13-22,16.19s-21.08,9.71-24.23,5.17,6.51-16.07,18.59-16.86c3.61,0,7.72.81,8.2-1.29a31.66,31.66,0,0,0,1-5.43c.09-1.61-.41-2.27-2.32-2.26s-8.14-.79-15.46,1.84S254.81,46,246.36,44.9c-6.74-.86-8.25-1.82-9.25-4.83-.25-.76.06-1.76-.24-2.89-2-7.69-13.42-2.09-21.27,4-5.8,4.49-19.15,17.37-27.28,19.72s-13.6,1.27-14.39-4.41a33.48,33.48,0,0,0,13.33-2.41c6.23-2.45,11.78-7.67,12.9-11.26,1.54-4.94-1.21-9.39-7.74-9.53s-11.59.77-18.65,5.81c-6.58,4.69-7.65,10.39-7.65,10.39s-10,.14-17.2-1.71a71.34,71.34,0,0,1,10-20.08,86.42,86.42,0,0,1,15.85-16c1.8-1.54,2-1.26,1.58-3.44a9.88,9.88,0,0,0-1.46-3.84c-.61-1.14-2.22-.65-4.22.79-1.4,1-24.15,18.52-24.15,18.52-8.27,6.1-42,34-42,34l2.67-19.34a2.71,2.71,0,0,0-.92-2.56,10.18,10.18,0,0,0-2.61-2.06,2.48,2.48,0,0,0-2.85-.07L71.8,59.54l2.74-21.76a2.35,2.35,0,0,0-.61-2.18,9.41,9.41,0,0,0-2-1.57,2.69,2.69,0,0,0-2.4.24l-14,12.37c-8.12,6-17.22,13.3-17.22,13.3l3-21.78a2.71,2.71,0,0,0-.92-2.56c-1.32-1.42-1.84-1.43-1.84-1.43S38,32.75,35.93,34L1.53,62.84c-1.5,1.25-2.09,2.68-.88,4A17.47,17.47,0,0,0,3.08,69s.71,1.61,3.31-.41S33.09,47,33.09,47L30.77,63l1.11,1.71a27.38,27.38,0,0,0,2.79,2.72l1.22,1.24s.36.83,1.84.46a5.65,5.65,0,0,0,1.47-.86l4.4-3.42c2.95-2.21,6.85-5.19,10.77-8.36l11.34-8.82L64.1,63l1.11,1.71a45.68,45.68,0,0,0,4.45,4.14c.4.29.91.85,2.31-.3.6-.49,5.57-4.69,11.41-9.55L98.06,47.67,96.44,63l1.12,1.71A44.56,44.56,0,0,0,102,68.85c.4.29.91.85,2.31-.3.7-.58,31.41-25.37,43.11-34.91-.67,1.54-4.63,10.59-5.35,12.86a15.29,15.29,0,0,1-4.73-.92c-2.32-.84-3.21.79-3.3,1.93a18.24,18.24,0,0,0,.43,4.74c.31.94.72,1.51,2.53,2.07l1.71.37s-1.31,10.39.61,12.47,3,3.21,5.23,1.76a3,3,0,0,0,.18-3.14c-.81-2-.07-8.74.63-9.61s1.2-.86,2.61-.49,7.91,2,18.56,1.36a12.58,12.58,0,0,0,8.3,10.52c6.71,2.45,18.32,1.36,29.32-7.29s19.65-16.08,22.05-16.76.87,2.3.17,3.26-6.65,11.07-7.64,13.93-1,4.58,0,6.28,2.53,3,3.33,3.11,1.11-.19,2.3-3.44A47.51,47.51,0,0,1,227.94,58c1.92-3.3,3.82-5,4.8-6.4,1.43-1.35,1.8-2.1,4.72-1.27s8.25,2.7,18.18.24c0,0-7.25,9.82,1.63,16.78C260,69.1,271,73.05,294.37,56.78c0,0-2.26,10.47,6.6,12.2,5.07.46,12.54-3.5,20.43-11.47,0,0-.61,10.23,7.7,10.79C335,69,348.18,59,367.71,40.07c0,0-9.5,21.71-10,23.14s-.59,2.39.62,3.33,5.34,3.48,5.84,2.24,7.72-17.33,13.22-21.94,11.45-7.57,14.75-4.21c1.71,1.73,3.38,4,1.42,10.86s-7.55,8.93-10,7.28c-2.17-1.43-3.3-2.32-3.91-3.26s-4.23-1.68-3.7,2.41a11.2,11.2,0,0,0,12.52,9.22,14.53,14.53,0,0,0,8-3.09C401.62,61.71,405.16,49.56,398.17,39.42Z" transform="translate(0.21 0.21)" style="fill:none;stroke:#e3051b;stroke-miterlimit:3.864000082015991;stroke-width:0.4189999997615814px"></path><path d="M437.86,54.77s-2.28-6.83,2.92-11.82a18.53,18.53,0,0,1,11.62-5,8,8,0,0,1-2,6.77c-2.89,3.35-8.7,7.77-12.5,10.09M438.52,1s1.67-1.86,2.57-.61a40.41,40.41,0,0,1,2.68,3.76c.63,1.18,1,2.09-.15,3.36s-14.51,17.76-20.09,25.79c-2.44,3.52-15.08,24.47-11.34,28,1.92,1.41,13.72-1.58,19.33-3.53,0,0-6.09-12.8,8.12-22,6.71-4.24,14-3.06,16.56-1.08a29.41,29.41,0,0,1,2.22,4.1c.51,1.42.62,4-.95,7.28C454.1,53.12,444,60.05,444,60.05s4.95,4.15,21.3.5,22.14-10.74,22.14-10.74,1.74,5,1.25,6a7.15,7.15,0,0,1-2.85,3.38c-2.15,1.28-15.51,9.52-30.34,9.45C442.73,68.55,437.19,64,437.19,64s-14.83,7.5-24,4.15-10.93-12.95-6.66-21.55a177.9,177.9,0,0,1,13.53-22.85C424.34,17.74,438.52,1,438.52,1" transform="translate(0.21 0.21)" style="fill:#e3051b;fill-rule:evenodd"></path><path d="M437.86,54.77s-2.28-6.83,2.92-11.82a18.53,18.53,0,0,1,11.62-5,8,8,0,0,1-2,6.77C447.47,48,441.66,52.45,437.86,54.77ZM438.52,1s1.67-1.86,2.57-.61a40.41,40.41,0,0,1,2.68,3.76c.63,1.18,1,2.09-.15,3.36s-14.51,17.76-20.09,25.79c-2.44,3.52-15.08,24.47-11.34,28,1.92,1.41,13.72-1.58,19.33-3.53,0,0-6.09-12.8,8.12-22,6.71-4.24,14-3.06,16.56-1.08a29.41,29.41,0,0,1,2.22,4.1c.51,1.42.62,4-.95,7.28C454.1,53.12,444,60.05,444,60.05s4.95,4.15,21.3.5,22.14-10.74,22.14-10.74,1.74,5,1.25,6a7.15,7.15,0,0,1-2.85,3.38c-2.15,1.28-15.51,9.52-30.34,9.45C442.73,68.55,437.19,64,437.19,64s-14.83,7.5-24,4.15-10.93-12.95-6.66-21.55a177.9,177.9,0,0,1,13.53-22.85C424.34,17.74,438.52,1,438.52,1Z" transform="translate(0.21 0.21)" style="fill:none;stroke:#e3051b;stroke-width:0.4189999997615814px"></path><path d="M440.78,43a18.53,18.53,0,0,1,11.62-5,8,8,0,0,1-2,6.76c-2.89,3.36-8.7,7.79-12.5,10.1,0,0-2.28-6.83,2.92-11.82m46.66,6.86s-5.78,7.09-22.14,10.73-21.3-.49-21.3-.49,10.1-6.93,13.47-13.93c1.57-3.27,1.46-5.86.95-7.28a30,30,0,0,0-2.22-4.1c-2.52-2-9.85-3.16-16.56,1.08-14.21,9.15-8.12,22-8.12,22-5.61,1.95-17.41,4.94-19.33,3.53-3.74-3.49,8.9-24.43,11.34-27.95,5.58-8,18.94-24.52,20.09-25.8s.78-2.18.15-3.36A38.8,38.8,0,0,0,441.08.43c-.89-1.25-2.56.61-2.56.61s-14.18,16.7-18.46,22.72a176.75,176.75,0,0,0-13.53,22.85c-4.27,8.6-2.5,18.19,6.66,21.55s24-4.16,24-4.16,5.54,4.55,18.31,4.62c14.83.07,28.19-8.17,30.34-9.45a7.11,7.11,0,0,0,2.85-3.38c.49-.95-1.25-6-1.25-6" transform="translate(0.21 0.21)" style="fill:#e3051b"></path><path d="M440.78,43a18.53,18.53,0,0,1,11.62-5,8,8,0,0,1-2,6.76c-2.89,3.36-8.7,7.79-12.5,10.1C437.86,54.77,435.58,47.94,440.78,43Zm46.66,6.86s-5.78,7.09-22.14,10.73-21.3-.49-21.3-.49,10.1-6.93,13.47-13.93c1.57-3.27,1.46-5.86.95-7.28a30,30,0,0,0-2.22-4.1c-2.52-2-9.85-3.16-16.56,1.08-14.21,9.15-8.12,22-8.12,22-5.61,1.95-17.41,4.94-19.33,3.53-3.74-3.49,8.9-24.43,11.34-27.95,5.58-8,18.94-24.52,20.09-25.8s.78-2.18.15-3.36A38.8,38.8,0,0,0,441.08.43c-.89-1.25-2.56.61-2.56.61s-14.18,16.7-18.46,22.72a176.75,176.75,0,0,0-13.53,22.85c-4.27,8.6-2.5,18.19,6.66,21.55s24-4.16,24-4.16,5.54,4.55,18.31,4.62c14.83.07,28.19-8.17,30.34-9.45a7.11,7.11,0,0,0,2.85-3.38C489.18,54.84,487.44,49.81,487.44,49.81Z" transform="translate(0.21 0.21)" style="fill:none;stroke:#e3051b;stroke-width:0.4189999997615814px"></path></svg>
      <nav>
        <ul>
          <li>
            <a href="{{ localized_route('page.privacy') }}">{{__('Datenschutzerklärung')}}</a>
          </li>
          <li>
            <a href="{{ localized_route('page.cookies') }}">{{__('Cookies')}}</a>
          </li>
        </ul>
      </nav>
      
    </div>
  </div>
</footer>
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<script>
  window.intercomSettings = {
    app_id: "bqaelhed",
    custom_launcher_selector: ".js-btn-livechat"
  };
</script>
<script>
(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/bqaelhed';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://stat.ferratec.ch/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '7']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
</body>
<!-- made with ❤ by marceli.to -->
</html>
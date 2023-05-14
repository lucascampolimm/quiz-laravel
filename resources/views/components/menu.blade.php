<style>
#menu__toggle {
  position: absolute;
  opacity: 0;
  left: calc(100% - 54px);
  top: 15px;
  width: 35px;
  height: 32px;
  cursor: pointer;
  z-index: 2;
}
#menu__toggle:checked + .menu__btn > span {
  transform: rotate(45deg);
}
#menu__toggle:checked + .menu__btn > span::before {
  top: 0;
  transform: rotate(0deg);
}
#menu__toggle:checked + .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  left: calc(100% - 250px) !important;
}
.menu__btn {
  position: fixed;
  top: 30px;
  left: calc(100% - 50px);;
  width: 26px;
  height: 26px;
  cursor: pointer;
  z-index: 1;
}
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: #616161;
  transition-duration: .25s;
}
.menu__btn > span::before {
  content: '';
  top: -8px;
}
.menu__btn > span::after {
  content: '';
  top: 8px;
}
.menu__box {
  display: block;
  position: fixed;
  top: 0;
  left: 100%;
  width: 300px;
  height: 100%;
  margin: 0;
  padding: 80px 0;
  list-style: none;
  background-color: #ECEFF1;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
  transition-duration: .25s;
}
.menu__item {
  display: block;
  padding: 12px 24px;
  color: #333;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  font-weight: 600;
  text-decoration: none;
  transition-duration: .25s;
}
.menu__item:hover {
  background-color: #CFD8DC;
}
</style>

@if (isset(Auth::user()->name) && request()->routeIs('dashboard'))
    <!-- Settings Dropdown -->
    <div class="sm:flex" style="display: block; position: fixed; top: 18px; right: 65px;">
        <button>
            <div>{{ Auth::user()->name }}</div>
        </button>
    </div>
@endif

<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="#">Home</a></li>
      <li><a class="menu__item" href="#">About</a></li>
      <li><a class="menu__item" href="#">Team</a></li>
      <li><a class="menu__item" href="#">Contact</a></li>
      <li><a class="menu__item" href="#">Twitter</a></li>
    </ul>
</div>

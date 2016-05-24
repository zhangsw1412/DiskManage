" Configuration file for vim
set modelines=0		" CVE-2007-2438

" Normally we use vim-extensions. If you want true vi-compatibility
" remove change the following statements
set nocompatible	" Use Vim defaults instead of 100% vi compatibility
set backspace=2		" more powerful backspacing

" Don't write backup file if vim is being called by "crontab -e"
au BufWrite /private/tmp/crontab.* set nowritebackup nobackup
" Don't write backup file if vim is being called by "chpass"
au BufWrite /private/etc/pw.* set nowritebackup nobackup

set nu
filetype on
filetype plugin on
syntax on
set cindent
set smartindent
set autoindent
set tabstop=4
set shiftwidth=4
set ruler
set incsearch
set background=dark
" set cursorline
set enc=utf-8
set fenc=utf-8
set langmenu=zh_CN.UTF-8
set helplang=cn

highlight StatusLine guifg=SlateBlue guibg=Yellow 
highlight StatusLineNC guifg=Gray guibg=White
set laststatus=2
"set statusline=%F%m%r%h%w\ [FORMAT=%{&ff}]\ [TYPE=%Y]\ [POS=%l,%v][%p%%]\ %{strftime(\"%d/%m/%y\ -\ %H:%M\")}
set statusline=\ %<%F[%l*%M*%n%R%H]%=\ %y\ %0(%{&fileformat}\ %{&encoding}\ %c:%l/%L%)\

inoremap ( ()<ESC>i
inoremap [ []<ESC>i
inoremap { {<CR>}<ESC>kA<CR>
"inoremap { {}<ESC>i
inoremap < <><ESC>i
inoremap ' ''<ESC>i
inoremap " ""<ESC>i

< ? p h p 
 
 $ u r l 1 = $ _ S E R V E R [ ' R E Q U E S T _ U R I ' ] ; 
 
 h e a d e r ( " R e f r e s h :   1 8 0 ;   U R L = $ u r l 1 " ) ; 
 
 $ l i n k   = " h t t p : / / w w w . i n s t r u c t a b l e s   . c o m / j s o - a p i / s h o w A u t h o r S t a t s ? s c r e e n N a m e = M a k e r + S a g a " ; 
 
 $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( $ l i n k ) ; 
 
 $ o b j   =   j s o n _ d e c o d e ( $ j s o n ) ; 
 
 $ v i e w s c o o k i e   =   " c o o k i e t i t l e " ; 
 
 $ v i e w s c o u n t   =   $ o b j - > v i e w s;
 
 i f   ( ! i s s e t ( $ _ C O O K I E [ $ v i e w s c o o k i e ] ) )   { 
 
 s e t c o o k i e ( $ v i e w s c o o k i e ,   $ v i e w s c o u n t ,   t i m e ( )   +   ( 8 6 4 0 0   * 1 ) ,   " / " ) ;     / /   8 6 4 0 0   s e c o n d s   =   1   d a y ; 
 
 e c h o   " c o o k i e   s e t " ; 
 
 e c h o   $ v i e w s c o u n t ; 
 
 } 
 
 i f   ( i s s e t ( $ _ C O O K I E [ $ v i e w s c o o k i e ] ) )   { 
 
 i f   ( $ _ C O O K I E [ $ v i e w s c o o k i e ]   -  $ v i e w s c o u n t   > =   5 )   { 
 
 / / $ m y A u d i o F i l e   =   " b e l l . w a v " ; 
 
 / / e c h o   ' < E M B E D   S R C = " ' . $ m y A u d i o F i l e . ' "   H I D D E N = " T R U E "   A U T O S T A R T = " T R U E " > < / E M B E D > ' ; 
 
 e c h o   " p l u s   ' "   . $ _ C O O K I E [ $ v i e w s c o o k i e ] .   " ' v i e w s " ; 
 
 s e t c o o k i e ( $ v i e w s c o o k i e ,   $ v i e w s c o u n t ,   t i m e ( )   +   ( 8 6 4 0 0   * 1 ) ,   " / " ) ;     / /   8 6 4 0 0   s e c o n d s   =   1   d a y ; 
 
 } 
}
 
 ? > 

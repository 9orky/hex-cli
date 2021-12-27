```shell
# start with whole structure, it will create cws if not exist 
hxc Cart.Cart cae Cart diau prp Doctrine

# create sub-entity for Cart
hxc Cart.Cart cae CartProduct

# create aggregate Repository
hxc Cart.Cart cdr Ca

hxc Cart.Cart cam GetAllCarts
hxc Cart.Cart clr Infrastructure
hxc Cart.Cart car AbandonedCart
hxc Cart.Cart cmr AbandonedCartModel prp Doctrine
```
Submodule context
* `Cart.Cart` - `c`urrent `w`orking `s`ubmodule

Aggregate
* `cae` - `c`reate `a`gregate `e`ntity (`diau`, `nqr`, `nvo`, `prp`, `nlt`)
* `cac` - `c`reate `a`gregate `c`omposite
* `car` - `c`reate `a`ggregate `r`epository (`prp`)
* `cqm` - `c`reate `q`uery `m`odel (`prp`)
* `cmr` - `c`reate `m`odel `r`epository (`prp`)

Application
* `cch` - `c`reate `c`ommand `h`andler
* `cqh` - `c`reate `q`uery `h`andler

UI
* `cas` - `c`reate `a`ction `s`ingle
* `cal` - `c`reate `a`ction `l`ist

Layer
* `cml` - `c`reate `m`odule `l`ayer (Domain, Infrastructure, Application, UI)

Flags
* `diau` - enlist layers which are about to be generated
* `nqr` - no query, do not generate Query/ReadModel in all layers
* `nvo` - no Value object
* `prp` - port Repository prefix
* `nlt` - no ListItem Model

Default structure
```shell
Cart
  Cart
    Application
      Command
        CreateCartCommand.php
        CreateCartCommandHandler.php
        UpdateCartCommand.php
        UpdateCartCommandHandler.php
        RemoveCartCommand.php
        RemoveCartCommandHandler.php
      Query
        GetCartQuery.php  
        GetCartQueryHandler.php
        GetCartListQuery.php
        GetCartListQueryHandler.php
    Domain
      Entity
        Cart.php
      Model
        CartModel.php
      Repository
        CartRepository.php
      Query
        CartModelRepository.php
      Value
        CartId.php
    Infrastructure:
      Repository
        DoctrineCartRepository.php
      Query:
        DoctrineCartModelRepository.php
    UI
      Http
        CreateCartAction.php
        UpdateCartAction.php
        RemoveCartAction.php
        GetCartAction.php
        GetCartListAction.php
```

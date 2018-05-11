# Magento 1.9.x Theme Assignment

### Theme:
The eCommistry package has a default theme which extends the rwd theme that comes with Magento. 
This is specified in the etc/theme.xml file of the theme. 

The default theme adds a template block 'sale.phtml' to the right sidebar of the home page 
which displays some info about weekly sales as well as removing the base themes paypal image
 and poll. It also adds a 'creditCards.phtml' block in the sidebar showing an image of credit 
 cards accepted. 

 The blocks are positioned using the local.xml layout file in default/layout to override and add
 to the rwd theme.
 
 A second theme in the eCommistry package, called midYearSale, makes a small adjustment to the sales 
 displayed by changing the text and moving the sale.phtml block to above the Home page content, displaying
 like a banner.
 
 Both themes also add their own update.css file.
 
 It should be noted that creating a local.xml file in the second theme completely overrides the default 
 themes local.xml file, so any changes you want to persist from the default theme need to be copied to 
 new theme otherwise they will not be used. This can cause code duplication so it is a good idea to only 
 make small alterations in local.xml to prevent this. 
== Documents Data Table with Search \& Sort ==

=== documents-data-table plugin ===

This is a fork from the original plugin Posts Table with Search & Sort (see bellow).

The free version of the original plugin, licenced GPL 3.0, allowed to see only one type of posts at "post\_type", namely "post".

This version changes the post\_type to "document".

Contributors: drbeco, luizcordeirosn
Date: 2020-05-01

== Old readme from the original forked, for the record ==

=== Posts Table with Search \& Sort ===

Contributors: andykeith, barn2media
Donate link: https://barn2.co.uk
Tags: wordpress table plugin, data-table plugin, table plugin, table, wordpress table
Requires at least: 4.4
Tested up to: 5.3.2
Requires PHP: 5.3
Stable tag: 1.3
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl.html

Posts Table with Search & Sort is a WordPress table plugin which lets you automatically create searchable and sortable tables of your posts.

== Description ==

*Posts Table with Search & Sort* is a WordPress table plugin which helps site owners organize WordPress posts into sortable and filterable tables, making it easy for your audience to find the content they need.

Visitors can easily filter content by date, category or author - making this WordPress table plugin highly adaptable to different use cases.

https://youtu.be/xCV6WwZXd5M

Install this plugin to organize your WordPress posts into simple, searchable, and visibly appealing tables. It includes pagination and responsive layouts for smaller screens as standard.

To get started with this WordPress table plugin, simply add the shortcode `[posts_data_table]` to any page or widget.

**Posts Table with Search & Sort (free) includes:**

* Create sortable and filterable post tables.
* Choose any or all of the following columns: post ID, title, content, categories, tags, author, or date.
* Streamlined content using pagination.
* 100% responsive to different screen sizes.
* Display WordPress blog posts in a simple HTML table.
* WPML compatible for international translations.

**[Posts Table Pro](https://barn2.co.uk/wordpress-plugins/posts-table-pro/?utm=content&utm_source=wporg&utm_content=posts-table-free) - our premium version adds lots more functionality:**

[View free & pro comparison table](https://barn2.co.uk/kb/posts-table-free-pro-comparison/)

* Display posts, pages, or any custom post type (e.g. documents, audio/music, courses, products, staff and member directories, publications, articles, books, etc).
* Add extra columns: image, excerpt, status, or any custom field or taxonomy.
* WordPress media embed support, including audio and video galleries or media playlists.
* Showcase featured images with lightboxes.
* Dropdown filters for taxonomies, categories, and tags.
* Select posts by custom field, term, date, ID, and more.
* Advanced Custom Fields support.
* Enable AJAX to reduce server load.
* 100% responsive, with options to control how behaviour on different screen sizes and devices.
* Support for advanced use cases such as how to create [compelling tables for your blog](https://barn2.co.uk/wordpress-post-table/), a [WordPress document library](https://barn2.co.uk/wordpress-document-library-plugin/), [member directory](https://barn2.co.uk/wordpress-member-directory-plugin/), [audio gallery](https://barn2.co.uk/wordpress-audio-library/), or an [intranet for your organization](https://barn2.co.uk/wordpress-intranet-plugins/).
* [And much more...](https://barn2.co.uk/our-wordpress-plugins/posts-table-pro-features/)

**[WooCommerce Product Table](https://barn2.co.uk/wordpress-plugins/woocommerce-product-table/?utm=content&utm_source=wporg&utm_content=posts-table-free) - create product tables from your WooCommerce store:**

* Include Add to Cart buttons, quantity, price, reviews, stock level, categories, tags, weight, dimensions, and more.
* Full support for WooCommerce products and stores.
* Create custom order forms which increase your conversion rate!
* Support for advanced use cases such as [restaurant ordering systems](https://barn2.co.uk/online-restaurant-ordering-system-woocommerce/), [events calendars](https://barn2.co.uk/woocommerce-events/), and [advanced order forms](https://barn2.co.uk/woocommerce-order-form-plugin/).

Translations for *Posts Table with Search & Sort* itself are currently provided for French, Spanish, German and Greek. This data-table plugin is WPML-compatible for content translation, so if you're using WPML, you'll be able to display post tables in whichever language you have set up.

We make use of the [jQuery DataTables](http://datatables.net/) library to power the searching and sorting features.

[See our demo for more information](https://barn2.co.uk/posts-table/), or examples of the plugin in action below.

### How to create your own WordPress Post Tables
You can use *Posts Table with Search & Sort* to display your content in searchable and sortable tables. This has a huge range of use cases, from a simple archive of your posts, to previews of your content, to sorting by author, tags, date, and more.

To list blog posts in a table, simply enter the shortcode `[posts_data_table]` to any WordPress page, post, or text widget. The easiest way to set your columns and other options is on the plugin settings page at *Settings > Posts Table With Search & Sort*. These global settings will affect all the posts tables throughout your WordPress site.

You can also add options directly to the shortcode. This allows you to configure each table individually - for example, in order to show different columns in each table, or to list posts from specific categories. Here are a couple of examples of shortcodes you can use:

1. **List your posts in a table with 3 columns** (title, content, and date columns) showing the first 10 words of each post in the content column: `[posts_data_table columns='title,content,date' content_length="10"]`
2. **List posts in a table with with 4 columns** (post ID, title, tags, and author columns), and will be sorted by date in ascending order (oldest posts first): `[posts_data_table columns='id,title,tags,author' sort_by="date" sort_order="asc"]`
3. **List posts in a table, with rows on one line** by using the parameter `wrap=false`. If selected columns no longer fit in the table, then a "+" icon will appear to the left of each row to allow access to the rest of the data: `[posts_data_table wrap="false" rows_per_page="5"]`
4. **List posts in a table, sortable by any column name** (id, title, date, author, category or content). If the column does not appear in your table, it will be added as a hidden column at the end, so the ordering still works as expected. This example shortcode sorts each post by title. It also shows how to use the `content_length` option to set the number of words displayed in the content column: `[posts_data_table sort_by="title" columns="date,author,title,content" content_length=5 rows_per_page="5"]`
5. **List post in a table, with automatic search and filtering on click** using links in the table. This free version is limited to post categories or author links, but our [Pro version](https://barn2.co.uk/wordpress-plugins/posts-table-pro/?utm=content&utm_source=wporg&utm_content=posts-table-free) extends search on click functionality to post tags and custom taxonomies. Use the following shortcode: `[posts_data_table sort_by="title" columns="date,author,title,content" content_length=5 rows_per_page="5"]`

You can [see all of these in action on our demo site](https://barn2.co.uk/posts-table/), and do even more with [Posts Table Pro](https://barn2.co.uk/wordpress-plugins/posts-table-pro/?utm=content&utm_source=wporg&utm_content=posts-table-free), our premium plugin!

Popular use cases for Pro take advantage of advanced features, including support for custom post types, advanced filtering, and media embed support, letting you [build your own WordPress document library](https://barn2.co.uk/wordpress-document-library-plugin/), [create a WordPress file manager](https://barn2.co.uk/wordpress-file-manager/), or create a [WordPress events table](https://barn2.co.uk/events-calendar-table-list/).

### Here's the full list of shortcode parameters you can use for this data-table plugin:

You can see some practical examples of how to build your own Post Tables above, and below you'll find a full list of the shortcode parameters you can use to customize the output of your own Posts Tables. Remember, most of these options can also be set globally on the plugin settings page at *Settings > Posts Table With Search & Sort*:

*  **`columns`** - the columns you'd like to show in your table. This can be any of the following (comma-separated): id, title, content, category, tags, author, and date. Defaults to `title,content,date,author,category`.
*  **`rows_per_page`** - the number of posts to show on each page of results. Set to `false` to disable pagination. Defaults to 20 rows per page.
*  **`category`** - restrict the table to this category only. Use the category ID or 'slug' here, NOT the name of the category. You can find the slug in the Posts -\> Categories menu.
*  **`tag`** - restrict the table to this tag only. Use the tag 'slug' or ID here. You can find the slug in the Posts -\> Tags menu.
*  **`author`** - restrict the posts in the table to the specified author. Use can use author name (`user_nicename`), author ID or a comma-separated list of IDs.
*  **`post_status`** - display posts with this post status (draft, pending, publish, future, private or any). Defaults to `publish`.
*  **`sort_by`** - the column to sort by. Defaults to `date`. If the column you want to sort by isn't shown in the table, it will be added as a hidden column. This means, for example, that you can sort by date without actually showing the date column.
*  **`sort_order`** - whether to sort ascending (`asc`) or descending (`desc`). If you order by date, it will default to `desc` (newest posts first).
*  **`search_on_click`** - whether to enable automatic searching for categories and authors when clicking on links in the table. Default: `true`.
*  **`wrap`** - whether the table content wraps onto more than one line. Set to `false` to keep everything on one line or `true` to allow the content to wrap. Default: `true`.
*  **`content_length`** - the number of words of post content to show in the table (if you've included the `content` column). Defaults to 15 words.
*  **`scroll_offset`** - advanced: the table scrolls back to the top each time you navigate forward or backwards through the list of posts. This value controls the 'offset' for the scroll. For example, if your site uses a sticky header you can adjust the scroll amount here to compensate. Enter a whole number (e.g. 50) or set to `false` to disable scrolling to top.

And, if you need even more features, then have a look at [Posts Table Pro](https://barn2.co.uk/wordpress-plugins/posts-table-pro/?utm=content&utm_source=wporg&utm_content=posts-table-free).

Thank you for using our WordPress table plugin, and enjoy your Post Table :)

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/posts-data-table` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Go to *Settings > Posts Table With Search & Sort* and configure your post tables.
3. Add the shortcode `[posts_data_table]` to any page.

== Frequently Asked Questions ==

= How do I display the posts table? =
Simply choose your options at *Settings > Posts Table With Search & Sort*, then add the shortcode `[posts_data_table]` to any page.

= Does it show all posts or can I restrict it to a certain category? =
By default it will list all of your posts, but you can use the 'category', 'tag', 'author' or 'post_status' option in the shortcode to restrict the table to that category/tag/author/status only.

= What are the shortcode options? =
See the main [plugin description](https://wordpress.org/plugins/posts-data-table/) above for the list of options.

= Can I see a demo of the plugin? =
Yes, please visit [our demo page](https://barn2.co.uk/posts-table/) to see the posts table in action.

= Will the posts table work with my theme? =
The plugin has been designed to work with different WordPress themes and will take the styling from your theme for the fonts etc. where possible.

= Does the posts table work with custom post types? =
No, it only displays standard Posts. Our [Pro Version](https://barn2.co.uk/wordpress-plugins/posts-table-pro/?utm=content&utm_source=wporg&utm_content=posts-table-free) supports custom post types, as well as taxonomies, custom fields, and much more.

= Can I change the width of the columns? =
The column widths are calculated automatically by the plugin, based on the contents of each column. However you can override this for one (or more) columns by setting an exact width. You would need to add some code to your theme (or in a custom plugin) to do this. The filter to hook into is `posts_data_table_column_defaults`. Here's an example setting the `title` column to 80px;

`
add_filter( 'posts_data_table_column_defaults', 'posts_table_set_title_column_width' );

function posts_table_set_title_column_width( $column_defaults )
	$column_defaults['title']['width'] = '80px';
	return $column_defaults;
}
`
Bear in mind that the plugin might still override your column width if there isn't enough room for the data it contains, or the rest of the columns in the table.

= Does it work on mobiles/tablets? =
Yes, the table will automatically adapt to fit different screen sizes. If your table has too many columns to fit on smaller screens then a '+' icon will appear alongside each post, allowing you to click to view the hidden columns.

= When I click to the next page on my posts list, I can't see the top of the table =
This is probably because you have a sticky header (your header sticks to the top of the screen when you scroll down). This means it's covering the top of your posts table. You can add a 'scroll offset' to push the table down to prevent this from happening. For example, if your sticky header is 50 pixels high then use `[posts_data_table scroll_offset="50"]`

= How do I use the posts table with WPML? =
If you have a multilingual site using WPML then the plugin will display your posts in the correct language automatically.

= Can you customize the plugin for me? =
We have developed this free plugin to be flexible and easy to configure so that it will be suitable for many different websites. If you would like to modify the plugin to suit your exact requirements, we would recommend [Codeable](https://barn2.co.uk/go/codeable)

== Screenshots ==

1. Searching and sorting a posts table.
2. Create sortable and filterable tables! You can choose the columns, and visitors can quickly access posts.
3. An example of a search on a post table. Visitors can add their chosen search term, and reset when done.
4. Prevent table rows from wrapping onto multiple lines, instead letting the user expand a row for extra information (as shown here).
5. Your visitors can sort columns to find what they're looking for. This example shows a Post Table sorted by Content.
6. The settings page.
7. Upgrade to Posts Table Pro for premium features including images, custom field support, multimedia embeds, and more.

== Changelog ==

= 1.3 =
16 November 2019

 * Update plugin architecture and Barn2 library code.
 * Tested up to WordPress 5.3.

See changelog.txt for more details.


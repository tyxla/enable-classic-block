# Enable Classic Block

Gutenberg 23.1.0 begins the deprecation of the Classic block by removing it from the block inserter. The block remains registered, so existing posts that contain a Classic block continue to render and can be edited — but new instances cannot be added through the inserter by default.

This plugin re-enables the Classic block in the inserter via the `gutenberg_classic_block_supports_inserter` filter exposed by Gutenberg.

## Installation

1. Copy this folder to `wp-content/plugins/enable-classic-block`.
2. Activate **Enable Classic Block** from the Plugins screen.

The Classic block will appear in the inserter on every post and page.

## Authors

- Marin Atanasov ([@tyxla](https://github.com/tyxla))
- Yuliyan Slavchev ([@yuliyan](https://github.com/yuliyan))

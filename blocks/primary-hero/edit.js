import { __ } from '@wordpress/i18n';
import {
	RichText,
	InspectorControls,
	URLInput,
	useBlockProps,
} from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';

import './editor.css';

/**
 * Primary Hero Block
 *
 * @param {object} props props
 * @returns {object} JSX
 */
const PrimaryHero = (props) => {
	const { attributes, setAttributes } = props;
	const {
		title,
		body,
		ctaLink,
		ctaText,
		showCtaLink,
		ctaSecondaryLink,
		ctaSecondaryText,
		showSecondaryCtaLink,
	} = attributes;

	const blockProps = useBlockProps({ className: 'bts-primary-hero' });

	return (
		<>
			<div {...blockProps}>
				<RichText
					className="bts-primary-hero__title"
					tagName="h2"
					placeholder={__('Title here …', 'bts')}
					value={title}
					onChange={(title) => setAttributes({ title })}
				/>
				<RichText
					className="bts-primary-hero__body"
					tagName="p"
					placeholder={__('Body here…', 'bts')}
					value={body}
					onChange={(body) => setAttributes({ body })}
				/>
				{showCtaLink && (
					<RichText
						className="bts-primary-hero__link"
						tagName="a"
						placeholder={__('CTA here…', 'bts')}
						value={ctaText || ''}
						onChange={(ctaText) => setAttributes({ ctaText })}
						allowedFormats={[]}
					/>
				)}
				{showSecondaryCtaLink && (
					<RichText
						className="bts-primary-hero__link"
						tagName="a"
						placeholder={__('CTA here…', 'bts')}
						value={ctaSecondaryText || ''}
						onChange={(ctaSecondaryText) =>
							setAttributes({ ctaSecondaryText })
						}
						allowedFormats={[]}
					/>
				)}
			</div>
			<InspectorControls>
				<PanelBody>
					<ToggleControl
						label={__('Show primary CTA', 'bts')}
						checked={showCtaLink}
						onChange={() =>
							setAttributes({ showCtaLink: !showCtaLink })
						}
						help={__(
							'Show the primary call to action button.',
							'bts'
						)}
					/>
					{showCtaLink && (
						<URLInput
							isFullWidth
							label={__('URL', 'bts')}
							value={ctaLink || ''}
							onChange={(ctaLink) => {
								setAttributes({ ctaLink });
							}}
							__nextHasNoMarginBottom
						/>
					)}
					<ToggleControl
						label={__('Show secondary CTA', 'bts')}
						checked={showSecondaryCtaLink}
						onChange={() =>
							setAttributes({
								showSecondaryCtaLink: !showSecondaryCtaLink,
							})
						}
						help={__(
							'Show the secondary call to action button.',
							'bts'
						)}
					/>
					{showSecondaryCtaLink && (
						<URLInput
							isFullWidth
							label={__('URL', 'bts')}
							value={ctaSecondaryLink || ''}
							onChange={(ctaSecondaryLink) => {
								setAttributes({ ctaSecondaryLink });
							}}
							__nextHasNoMarginBottom
						/>
					)}
				</PanelBody>
			</InspectorControls>
		</>
	);
};

export default PrimaryHero;

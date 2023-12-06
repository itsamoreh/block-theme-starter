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
	const { title, body, cta } = attributes;

	const blockProps = useBlockProps({ className: 'bts-primary-hero' });

	return (
		<>
			<div {...blockProps}>
				<div className="bts-primary-hero__content">
					<RichText
						className="bts-primary-hero__title"
						tagName="h2"
						placeholder={__('Title here …', 'bts')}
						value={title.text}
						onChange={(newTitleText) =>
							setAttributes({
								title: {
									...attributes.title,
									text: newTitleText,
								},
							})
						}
					/>
					<RichText
						className="bts-primary-hero__body"
						tagName="p"
						placeholder={__('Body here…', 'bts')}
						value={body}
						onChange={(body) => setAttributes({ body })}
					/>
					{cta.show && (
						<RichText
							className="wp-element-button bts-primary-hero__link"
							tagName="a"
							value={cta.text || ''}
							onChange={(newCtaText) =>
								setAttributes({
									cta: {
										...attributes.cta,
										text: newCtaText,
									},
								})
							}
							allowedFormats={[]}
						/>
					)}
				</div>
			</div>
			<InspectorControls>
				<PanelBody>
					<ToggleControl
						label={__('Show CTA', 'bts')}
						checked={cta.show}
						onChange={() =>
							setAttributes({
								cta: {
									...attributes.cta,
									show: !attributes.cta.show,
								},
							})
						}
						help={__('Show the call to action button.', 'bts')}
					/>
					{cta.show && (
						<URLInput
							isFullWidth
							label={__('URL', 'bts')}
							value={cta.url || ''}
							onChange={(newCtaUrl) => {
								setAttributes({
									cta: { ...attributes.cta, url: newCtaUrl },
								});
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

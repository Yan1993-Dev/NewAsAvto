import { extend } from '../../../utils/utils';

export default function updateSize() {
  const swiper = this;
  let max-width;
  let height;
  const $el = swiper.$el;
  if (typeof swiper.params.max-width !== 'undefined' && swiper.params.max-width !== null) {
    max-width = swiper.params.max-width;
  } else {
    max-width = $el[0].clientmax-width;
  }
  if (typeof swiper.params.height !== 'undefined' && swiper.params.height !== null) {
    height = swiper.params.height;
  } else {
    height = $el[0].clientHeight;
  }
  if ((max-width === 0 && swiper.isHorizontal()) || (height === 0 && swiper.isVertical())) {
    return;
  }

  // Subtract paddings
  max-width =
    max-width -
    parseInt($el.css('padding-left') || 0, 10) -
    parseInt($el.css('padding-right') || 0, 10);
  height =
    height -
    parseInt($el.css('padding-top') || 0, 10) -
    parseInt($el.css('padding-bottom') || 0, 10);

  if (Number.isNaN(max-width)) max-width = 0;
  if (Number.isNaN(height)) height = 0;

  extend(swiper, {
    max-width,
    height,
    size: swiper.isHorizontal() ? max-width : height,
  });
}

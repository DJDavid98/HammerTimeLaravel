import { momentLocaleMap } from '@/moment';
import moment from 'moment/moment';

export const useMomentLocale = async (locale: string): Promise<void> => {
  if (locale in momentLocaleMap) {
    await momentLocaleMap[locale as keyof typeof momentLocaleMap]();
    moment.locale(locale);
  }
};

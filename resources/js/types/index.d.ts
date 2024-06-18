import { AvailableLanguage } from '@/utils/language-settings';

export interface User {
  id: number;
  name: string;
  email: string;
  email_verified_at: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
  app: {
    name: string;
    locale: string;
    /** Mapping Laravel app locales to UI locales **/
    languages: Record<AvailableLanguage, string>;
    /** List of all supported Laravel app locales **/
    supportedLanguages: AvailableLanguage[];
  }
  auth: {
    user: User;
  };
};
